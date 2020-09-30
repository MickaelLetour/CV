<?php
use App\Controller\TrainController;
$TrainController = new TrainController(); //appelle la classe 
$trains = $TrainController->getTrain(); //appelle la fonction que récupère les formations stockées en base de données
?>

<?php foreach($trains as $train){ ?>
    <div class="train jumbotron col-10 col-sm-8 col-md-5 col-lg-4 m-3">
        <h3> <?= $train->name?> </h3>
        <p>Ecole : <?=$train->school?></p>
        <p>Diplome : <?=$train->diploma?> </p>
    </div>
<?php } ?>