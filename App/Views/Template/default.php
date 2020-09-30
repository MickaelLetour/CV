<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
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
            <span class="head-function text-uppercase">développeur web junior</span>
          </h1>
        </div>
    </div>
    </header>

    <nav class="navbar navbar-expand-md navbar-dark justify-content-center sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"    aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-center" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#About">A propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#Skills">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#Book">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#Experiences">Expériences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#Diplomas">Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#Contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="https://www.linkedin.com/in/letourmickael/"><img src="<?php ROOT ?>/Public/img/linkedinIcon.jpg" width="30" class="img-fluid" alt="logo LinkedIn"></a>
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
            <div class="titleSection col-12 text-center p-0">
                <h2 class="text-uppercase font-weight-bold py-5">a propos</h2>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-4">
                    <p class="aboutText m-0">Mon objectif est de pouvoir développer toutes sortes de sites Web. Je voudrais me spécialiser dans le backend et la programmation. Je vise également à développer des algorithmes et des programmes complexes.</p>
                </div>
                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                    <a href="./Public/img/CVMickaelLetour.PDF" download><button class="btn btn-primary btn-sm">Téléchargez mon CV</button></a>
                </div>
            </div>
        </section>

        <section id="Skills" class="row justify-content-center text-center m-0">
            <div class="col-12 text-center p-0">
                <h2 class="titleSection text-uppercase font-weight-bold py-5">Compétences</h2>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/skills.php')?>
            </div>
        </section>

        <section id="Book" class="row justify-content-center text-center m-0">
            <div class="col-12 text-center p-0">
                <h2 class="titleSection text-uppercase font-weight-bold py-5">Portfolio</h2>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/books.php')?>
            </div>
        </section>

        <section id="Experiences" class="row justify-content-center text-center m-0">
            <div class="titleSection col-12 text-center p-0">
                <h2 class="text-uppercase font-weight-bold py-5">Experiences</h2>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/experiences.php') ?>
            </div>
        </section>

        <section id="Diplomas" class="row justify-content-center text-center m-0">
            <div class="titleSection  col-12 text-center p-0">
                <h2 class="text-uppercase font-weight-bold py-5">Formation</h2>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/train.php') ?>
            </div>
        </section>

        <section id="Contact" class="contact row justify-content-center text-center m-0">
            <div class="col-12 text-center p-0">
                <h2 class="titleSection text-uppercase font-weight-bold py-5">Contact</h2>
            </div>
            <div class="contentSection col-12 row text-center align-items-center justify-content-center">
                <?php require (ROOT. '/App/Views/Main/form.php') ?></div>
            </div>
        </section>
 
    </main><!-- /.container -->


    <footer class="col-12 text-center">
        <p class="mb-0">CV développeur web junior © 2020 Mickaël Letour - mentions légales</p>
    </footer>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
