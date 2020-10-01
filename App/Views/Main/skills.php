<?php 
use App\Controller\SkillController;

$SkillController = new SkillController();//appelle la classe
$categories = $SkillController->getCategories();// appelle la fonction qui renvoie les catégories des skills de la base de données
$skills = $SkillController->getSkills();// appelle la fonction qui renvoie les skills des skills de la base de données
?>

<?php foreach($categories as $category){ ?>
    
    <div class="skill jumbotron col-10 col-sm-8 col-md-5 col-lg-3 m-3 text-center align-items-center">
    <h3> <?= $category->name?></h3>
    <img src="<?php ROOT ?>/Public/img/<?= $category->name ?>.jpg" class="img-fluid" width="50px" height="auto" alt="<?= $category->name ?>">
    <?php foreach($skills as $skill){ ?>
        <?php foreach($skill as $s){ ?>
            <?php if($s->category === $category->name){?>
                <p> <?= $s->name ?></p>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <hr class="bg-dark">
    </div>
<?php } ?>


