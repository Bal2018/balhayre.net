<?php
/**
 * 
 * Author : balhayre 
 * 
 * @var ViewModel $Model
 * @var NSServiceProvider $ServiceProvider
 */

$incorrect_login = $Model->data['incorrect'];
$timeout = $Model->data['timeout'];
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $Model->name ?></title>

    <link rel="stylesheet" href="/resource/css/style.css">
    <link rel="stylesheet" href="/resource/css/nav.css">
    <link rel="stylesheet" href="/resource/css/card.css">
    <link rel="stylesheet" href="/resource/css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300|Poppins:100,300,400,600,500" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/resource/js/actions.js" defer></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head=
<body>
<nav>
    <ul>
        <li><a href="/#home"><i class="fas fa-home"></i></a></li>
        <li><a href="/#about">About</a></li>
        <li><a href="/#project">Projects</a></li>
        <li><a href="/#blog">Blogs</a></li>
    </ul>
</nav>

<section class="center" id="home">

    <form class="column" method="post">
        <label>
            <input type="text" name="username" title="username">
        </label>
        <label>
            <input type="password" name="password" title="password">
        </label>
        <button type="submit">Log In</button>

        <?php if ($incorrect_login){ ?>
        <div style="background:Red;color:white">
            <p>Incorrect login details</p>
        </div>
        <?php } else if ($timeout) { ?>
            <div style="background:gold;color:white">
                <p>Timeout out for 5min, try again later</p>
            </div>
        <?php } ?>
    </form>

</section>


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