<?php 
use App\Controller\BookController;

$BookController = new BookController();// appelle la classe BookController
$books = $BookController->getBooks();//Recupère les informations de la table  books
foreach($books as $book){ ?>

    <div class="col-md-6 col-lg-4 bg-dark m-3">
        <div class="card bg-dark text-white">
            <div class="card-header">
                <div id="<?= $book[0]->name?>" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        $j=1;
                        $k=0;
                        foreach($book as $img){ ?>
                            <button type="button" data-bs-target="#<?= $book[0]->name?>" data-bs-slide-to="<?= $k ?>" <?php if($j === 1){echo 'class="active"';} ?> aria-current="true" aria-label="Slide <?= $j ?>"> <?php ;
                            $j++;
                            $k++;
                        } ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        $i=0;
                        foreach($book as $img){ ?>
                            <div <?php if($i === 0){echo 'class="carousel-item active"';} else echo 'class="carousel-item"' ?> >
                                <img src="Public/img/<?= $book[0]->name?>/<?= $book[$i]->name_img ?>.png" class="<?= $book[$i]->name_img ?> img-fluid" alt="<?= $book[$i]->name_img ?>" data-bs-toggle="modal" data-bs-target="#<?= $book[0]->name?>-<?= $book[$i]->name_img ?>">
                            </div>
                            <div class="modal fade" id="<?= $book[0]->name?>-<?= $book[$i]->name_img ?>">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="Public/img/<?= $book[0]->name?>/<?= $book[$i]->name_img ?>.png" class="img-fluid" alt="<?= $book[$i]->name_img ?>">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" "></button> <!-- Le bouton pour fermer la fenêtre modale -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php ;
                            $i++;
                            } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#<?= $book[0]->name?>" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#<?= $book[0]->name?>" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <h5><?= $book[0]->name?></h5>
                <p><?= $book[0]->description?></p>
                <a href="<?= $book[0]->link?>"><?= $book[0]->link?></a>
            </div>
        </div>
    </div>
<?php } ?>


