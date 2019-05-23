<?php
/**
 * Routes  
 *
 * Author: darylcecile <darylcecile@gmail.com>
 * Date: 11/03/2019
 * Time: 01:05
 */

NSRouter::set("",function(NSServiceProvider $ServiceProvider){

    $vm = new ViewModel();
    $vm->name = "Bal Hayre";

    $ServiceProvider->ViewManager->RenderView("home", $vm);

});

NSRouter::set('/article/add',function(NSServiceProvider $ServiceProvider){

    $vm = new ViewModel();
    $ServiceProvider->ViewManager->RenderView("rizBlog",$vm);

});

NSRouter::set("/article/upload", function(NSServiceProvider $NSServiceProvider){

    echo Tools::POST("article","");

},['GET']);

NSRouter::set('/article/edit/{id}',function(NSServiceProvider $ServiceProvider){

    $vm = new ViewModel();
    $vm->data = [
        "article_id" => $ServiceProvider->ViewManager->variables['id']
    ];
    $ServiceProvider->ViewManager->RenderView("rizBlog",$vm);

});

NSRouter::set('/article/add',function(NSServiceProvider $ServiceProvider){

    $article = new ArticleModel();
    $article->title = Tools::POST('title');
    $article->contents = Tools::POST('content');


    $ServiceProvider-> ArticleRepository->add($article);

    $all_articles = $ServiceProvider->ArticleRepository->getAll();

    $id = $all_articles[count($all_articles)-1]->id;

    Tools::redirectTo("/article/edit/" . $id);

},['POST']);


NSRouter::set("/article/edit/{id}", function(NSServiceProvider $NSServiceProvider){

    $id = $NSServiceProvider->ViewManager->variables['id'];

    $article = $NSServiceProvider->ArticleRepository->get($id);

    $article->title = Tools::POST('title');
    $article->contents = Tools::POST('content');

    $NSServiceProvider->ArticleRepository->update($article);

    Tools::redirectTo("/article/edit/" . $id);

},['POST']);

NSRouter::set('/article/upload',function(NSServiceProvider $ServiceProvider){

    $incomingArticle = Tools::GET("article");
    $article = new ArticleModel();
    $article->title = $incomingArticle['title'];
    $article->contents = $incomingArticle['contents'];
    $article->image = $incomingArticle['image'];
    $article->categories = $incomingArticle['categories'];
    $article->isuseful = $incomingArticle['isuseful'];
    // to save it all

    $success = $ServiceProvider-> ArticleRepository ->add($article);
    $response = new NSResult();
    $response->HasErrors = ($success !== true);
    echo $response;

},["POST"]);



NSRouter::set('/blog/{id}',function(NSServiceProvider $ServiceProvider){
    $blog_id = $ServiceProvider->ViewManager->variables['id'];
    //gets the id from the url route we have set above
    $article = $ServiceProvider->ArticleRepository->get($blog_id);
    //Who is my article provider????


    $vm = new ViewModel();
    $vm->name = $article->title;
    $vm->data['article'] = $article;


    $ServiceProvider->ViewManager->RenderView("article", $vm);

});


NSRouter::set('/login',function(NSServiceProvider $ServiceProvider){

    if (isset($_COOKIE['session_id'])){
        Tools::redirectTo('/article/add');
    }
    else{

        $vm = new ViewModel();
        $vm->name = "Login";
        $vm->data = [
            "incorrect" => false,
            "timeout" => false
        ];

        $ServiceProvider->ViewManager->RenderView("auth", $vm);

    }

});

NSRouter::set('/login',function(NSServiceProvider $ServiceProvider){

    $username = Tools::POST('username');
    $password = Tools::POST('password');

    $account = $ServiceProvider->UserRepository->getByUsername($username);

    $sessionid = Tools::Hash( (new DateTime())->getTimestamp() );

    $timestamp = (new DateTime( $account->ts ))->getTimestamp();
    $current_timestamp = (new DateTime())->getTimestamp();

    if ($account->attempt_count > 5 && ($timestamp + 300) < $current_timestamp ){

        $vm = new ViewModel();
        $vm->name = "Login";
        $vm->data = [
            "incorrect" => false,
            "timeout" => true
        ];

        $ServiceProvider->ViewManager->RenderView("auth", $vm);

    }
    else if ($account->hash === Tools::Hash($password,$account->name)){
        $account->sessionid = $sessionid;

        $ServiceProvider->UserRepository->update($account);

        Tools::updateCookie("session_id",$sessionid);
        Tools::redirectTo("/article/add");
    }
    else{

        $account->attempt_count += 1;
        $ServiceProvider->UserRepository->update($account);

        $vm = new ViewModel();
        $vm->name = "Login";
        $vm->data = [
            "incorrect" => true,
            "timeout" => false
        ];

        $ServiceProvider->ViewManager->RenderView("auth", $vm);

    }

},['POST']);



