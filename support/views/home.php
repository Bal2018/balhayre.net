<?php
/** Author : balhayre 
 * @var ViewModel $Model
 * @var NSServiceProvider $ServiceProvider
 */

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
            <li><a href="#home"><i class="fas fa-home"></i></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#project">Projects</a></li>
            <li><a href="#blog">Blogs</a></li>
        </ul>
    </nav>

    <section class="center" id="home">
        <img src="/resource/images/avataaars.png" alt="">
        <h1>
            Bal Hayre
        </h1>
        <h3>
            Coder & Mathematics Tutor
        </h3>
    </section>
    <section class="center" id="about">
        <p class="section-icon"><i class="fas fa-laptop-code"></i></p>
        <h3>
             <span class="justify-text">
                 <p>
                 I am a Computer Science graduate with years of working
                 knowledge of programming fundamentals before I
                 retrained and moved into the teaching sector.  After
                 spending over a decade in teaching I rekindled my
                 passion for technology and am now looking to work in
                 this dynamic and exciting IT industry with new,
                 fast-paced and  challenging projects.
                 </p>
                 <p>
                 As a Mathematics Teachers and Tutor I have excellent
                 IT and analytical skills.  I have the ability and
                 skill set to plan and present complicated ideas simply.
                 Used to explaining logical complex problems
                 Regular attendee to a number of local tech meet-ups and
                 events such as <a href="https://www.meetup.com/Women-In-Tech-Nottingham/" target="_blank">Women In Tech,</a> IOT,  <a href="https://phpminds.org/" target="_blank">PHP Nottingham </a>and
                 <a href="https://www.technottingham.com/" target="_blank">Tech Nottingham</a>.
                 </p>
                 <p>
                 During these last few months I have learnt that I have a
                 passion for learning but it takes  dedication and patience.
                 </p>
             </span>
        </h3>
    </section>
    <section class="center" id="project">

        <div class="row">
            <div class="column">

                <div class="pop-card">
                    <img src="/resource/images/DVSALogo.jpg"/>
                    <h4>DVSA</h4>
                    <p>
                        As I have been out of the IT industry for a number of years I decided that the best way forward was to do a “work experience” placement.  I have been fortunate to have secured a number of weeks at DVSA in Nottingham.  This is part of the civil service and is such an exciting and dynamic place to work.  I have had exposure to PHP programming and the Agile working environment.  Thank you once again for this fantastic opportunity.
                    </p>
                </div>

            </div>
            <div class="column">
                <div class="pop-card">
                    <img src="/resource/images/HackerRank_logo.svg"/>
                    <h4>HankerRank</h4>
                    <p>
                        I’m learning Python on HackerRank.
                        This is such a good competitive programming platform with challenges for the programmer to solve.  Help is available through tutorials and discussions.  Once the solution has been submitted then it is scored depending on its complexity and accuracy of solution.
                    </p>
                </div>
            </div>
            <div class="column">
                <div class="pop-card">
                    <img src="/resource/images/projectfunction.svg"/>
                    <h4>Project Function</h4>
                    <p>
                        Enrolled in Project Function (a weekly coding course) course focussed on learning web development (HTML, CSS and Java-script )
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="center" id="blog">

        <? $articles = $ServiceProvider->ArticleRepository->getAll(); ?>

        <div class="article-collection">

            <? foreach ($articles as $article){ ?>

                <a href="/blog/<?= $article->id ?>" class="article-card" style="background-image: url(<?= $article->image ?>)">
                    <h3> <?= $article->title ?> </h3>
                </a>

            <? } ?>

        </div>


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