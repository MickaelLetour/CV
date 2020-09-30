<?php
use App\Controller\ExperienceController;

$ExperienceController = new ExperienceController();// appelle la classe experienceController
$experiences = $ExperienceController->getExperiences();//Recupère les informations de la table experiences
?>

<?php foreach($experiences as $experience){ ?>
    <div class="experience jumbotron col-10 col-sm-8 col-md-5 col-lg-4 m-3">
        <h3> <?= $experience->title?> </h3>
        <p>Du <?=$experience->date_start?> au <?=$experience->date_end?></p>
        <p>Entreprise : <?=$experience->name_business?> </p>
        <p>Ville : <?=$experience->city?> </p>
        <p> <?= $experience->content?></p>
    </div>
<?php } ?>
