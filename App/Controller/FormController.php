<?php 
var_dump($_POST);

if (isset($_POST['email'])){
    session_start();
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $send = ("Erreur dans l'Email");
        $_SESSION['emailError'] = $send;
    } else {
    $from = $_POST['email'];
        if ((isset($_POST['subject'])) && (isset($_POST['content']))){
            $subject = $_POST['subject'];
            $message = $_POST['content'];
            mail('mickael.letour@hotmail.fr', $subject, $message, 'De: ' . $_POST['username']. ' ' . $from);
            $send = ("Email Envoyé");
            $_SESSION['emailSend'] = $send;
        }
    }
    header('Location: ../../index.php#Contact');
}
    

