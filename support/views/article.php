<?php
/**
 * Author : balhayre 
 * 
 * @var ViewModel $Model
 * @var NSServiceProvider $ServiceProvider
 *
 * @var ArticleModel $article
 */

$article = $Model->data['article'];

?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $article->title ?> | Bal Hayre</title>

    <link rel="stylesheet" href="/resource/css/style.css">
    <link rel="stylesheet" href="/resource/css/nav.css">
    <link rel="stylesheet" href="/resource/css/card.css">
    <link rel="stylesheet" href="/resource/css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300|Poppins:100,300,400,600,500" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/resource/js/actions.js" defer></script>
</head>
<body>
<nav>
    <ul>
        <li><a href="/#home"><i class="fas fa-home"></i></a></li>
        <li><a href="/#about">About</a></li>
        <li><a href="/#project">Projects</a></li>
        <li><a href="/#blog">Blogs</a></li>
    </ul>
</nav>

<section class="center" >
    <div class="spacer"></div>
    <h1><?= $article->title ?></h1>

     <span class="justify-text">
         <?= $article->contents ?>
     </span>
</section>
<div class="scroll-progress"></div>


<aside>
    <ul class="social">
        <li><a target="_blank" href="https://twitter.com/balhayre"><i class="fab fa-twitter"></i></a></li>
        <li><a target="_blank" href="https://github.com/Bal2018"><i class="fab fa-github"></i></a></li>
        <li><a target="_blank" href="https://linkedin.com/in/baljinder-hayre-8344296a"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="mailto:bk.actions@gmail.com"><i class="fas fa-envelope-open-text"></i></a></li>
    </ul>
</aside>

<footer>
    <ul class="social">
        <li><a target="_blank" href="https://twitter.com/balhayre"><i class="fab fa-twitter"></i></a></li>
        <li><a target="_blank" href="https://github.com/Bal2018"><i class="fab fa-github"></i></a></li>
        <li><a target="_blank" href="https://linkedin.com/in/baljinder-hayre-8344296a"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="mailto:bk.actions@gmail.com"><i class="fas fa-envelope-open-text"></i></a></li>
    </ul>

    <p>© Bal Hayre 2019</p>
</footer>

</body>
</html>