<?php 
use App\HTML\BootstrapForm;
$form = new BootstrapForm($_POST); //instancie la class boostrap form
?>

<div class="form col-10 col-sm-8 col-md-5 col-lg-4 m-3 p-5 text-light">
<?php
    if (isset($_SESSION['emailError'])){ 
        $emailError = $_SESSION['emailError'];?>
            <div class="alert alert-danger bg-danger text-light">
                <?= $emailError ?>
            </div>
        <?php 
        unset($_SESSION['emailError']);
    } else if (isset($_SESSION['emailSend'])){
        $emailSend = $_SESSION['emailSend'];?>
        <div class="alert alert-success bg-success text-light">
            <?= $emailSend ?>
        </div> 
        <?php
        unset($_SESSION['emailSend']);
    }
?>

<form method="post" action="<?php ROOT ?>/App/Controller/FormController.php" autocomplete="on">
    <?= $form->input('username', 'Nom'); ?>
    <?= $form->input('subject', 'Objet'); ?>
    <?= $form->email('email', 'Email'); ?>
    <?= $form->textarea('content', 'Message'); ?>
    <?= $form->submit(); ?>
</form>
</div>