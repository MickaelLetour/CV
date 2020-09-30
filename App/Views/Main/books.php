<?php 
use App\Controller\BookController;

$BookController = new BookController();// appelle la classe BookController
$books = $BookController->getBooks();//Recupère les informations de la table  books

foreach($books as $book){ ?>
    <div class="book jumbotron col-10 col-sm-8 col-md-5 col-lg-4 m-3 align-self-center">
        <a href="<?= $book->link?>"><img class="img-fluid max-width: 100% height: auto" src="<?php ROOT ?>/Public/img/<?= $book->name_img ?>.jpg"></a>
    </div>
<?php } ?>


