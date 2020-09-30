<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="cv web developer junior Mickael Letour, back end et frond end, envie d'apprendre et motivé, aime travailler en équipe, php POO, javascript, jquery, reactjs, nodejs, html, css, sass, mvc. ">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>CV Mickael Letour</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php ROOT ?>/Public/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="Public/js/index.js" async></script>
  </head>
<body>
<div class="container-fluid p-0">
   
  <header class="header">
    <div class="text-light d-flex justify-content-center align-items-center">
        <div class="head">
          <h1 class="text-center">
            <span class="head-name text-uppercase">mickaël letour</spans>
            <hr class="bg-light">
            <span class="head-function text-uppercase text-primary">développeur web junior</span>
          </h1>
        </div>
    </div>
    </header>

    <nav class="navbar navbar-expand-md justify-content-center sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"    aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-center text-uppercase" href="#">accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center text-uppercase" href="#About">à propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center text-uppercase" href="#Skills">compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center text-uppercase" href="#Book">portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center text-uppercase" href="#expériences">expériences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center text-uppercase" href="#diplomas">Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center text-uppercase" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="https://www.linkedin.com/in/letourmickael/"><img src="<?php ROOT ?>/Public/img/linkedinIcon.jpg" class="img-fluid" alt="logo LinkedIn" width="30" ></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="https://github.com/MickaelLetour"><img src="<?php ROOT ?>/Public/img/githubIcon.jpg" class="img-fluid" alt="logo Git" width="30"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="https://www.facebook.com/mickael.tyler"><img src="<?php ROOT ?>/Public/img/fbIcon.jpg" class="img-fluid" alt="logo Facebook" width="30"></a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="p-0">

        <section id="About" class="row justify-content-center text-center m-0">
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <div class="aboutText my-5 py-5 col-12 col-sm-10 col-md-8 col-lg-6 text-light">
                    <h2 class="text-uppercase text-light font-weight-bold">à propos</h2>
                    <h4 class="text-primary mb-5">Moi en quelques mots</h4>
                    <p>Cumulant nombreuses expériences professionnelles avant d'aboutir à un poste de manager en restauration, j'ai choisi de me réorienter dans le développement web.</p>
                    <p>Après avoir démissionné de ce poste, j'ai entamé ma reconversion par un bilan de compétences, qui m'as dirigé sur le milieu du numérique.</p>
                    <p>J'ai toujours été passionné et captivé par ce milieu, notamment par le web, les jeux vidéo, les nouvelles technologies plus globalement.</p>
                    <p>Après avoir approfondie mes recherches, la réponse a fini par être évidente. J’étais fait pour le développement web.</p>
                    <p>Je m'y suis investi donc complètement en commençant par une formation au titre de développeur web et web mobile de niveau 5, à l'école Aformac (labelisé grande école du numérique), que j'ai obtenu au mois de mars 2020. Aujourd'hui, autodidacte, je continue à me former en vue de me spécialiser en développeur web back end.</p>
                    <p>Je suis à la recherche d'un premier emploi en tant que développeur web Junior</p>
                    <p>Je suis évidemment par encore un expert, mais j'aime apprendre, je suis très motivé à intégrer une entreprise et de mettre en pratique mon savoir-faire. Disponible, je peux vous rencontrer afin de vous prouver mes motivations et vous expliquer mon parcours.</p>
                    <a href="./Public/img/CVMickaelLetour.PDF" download><button class="btn btn-primary btn-sm">Téléchargez mon CV</button></a>
                </div>
            </div>
        </section>

        <section id="Skills" class="row justify-content-center text-center m-0">
            <div class="titleSection col-12 text-center py-5">
                <h2 class="text-uppercase font-weight-bold text-light">Compétences</h2>
                <h4 class="text-primary">Autodidacte, je me forme constamment</h4>
            </div>
            <div class="contentSection col-12 text-light row text-center align-items-center justify-content-center">
                <?php require ROOT.'/App/Views/Main/skills.php'?>
            </div>
        </section>

        <section id="Book" class="row justify-content-center text-center m-0">
            <div class="titleSection col-12 text-center py-5">
                <h2 class="text-uppercase font-weight-bold text-light">Portfolio</h2>
                <h4 class="text-primary">Mes premières réalisations</h4>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/books.php')?>
            </div>
        </section>

        <section id="Experiences" class="row justify-content-center text-center m-0">
            <div class="titleSection col-12 text-center py-5">
                <h2 class="text-uppercase font-weight-bold text-light">Expériences</h2>
                <h4 class="text-primary">Les plus significatives</h4>
            </div>
            <div class="contentSection col-12 row text-light text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/experiences.php') ?>
            </div>
        </section>

        <section id="Diplomas" class="row justify-content-center text-center m-0">
            <div class="titleSection col-12 text-center py-5">
                <h2 class="text-uppercase font-weight-bold text-light">Formations</h2>
                <h4 class="text-primary">Les plus</h4>
            </div>
            <div class="contentSection col-12 row text-light text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/train.php') ?>
            </div>
        </section>

        <section id="Contact" class="contact row justify-content-center text-center m-0">
            <div class="titleSection col-12 text-center py-5">
                <h2 class="text-uppercase font-weight-bold text-light">Contact</h2>
                <h4 class="text-primary">Pour me contacter</h4>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/form.php') ?></div>
            </div>
        </section>
 
    </main><!-- /.container -->


    <footer class="col-12 text-center text-light">
        <p class="mb-0">CV développeur web junior © 2020 Mickaël Letour - mentions légales</p>
    </footer>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
