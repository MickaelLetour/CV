<?php 

if (isset($_POST['email'])){
    session_start();
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $send = ("Erreur dans l'Email");
        $_SESSION['emailError'] = $send;
    } else {
        if ((isset($_POST['subject'])) && (isset($_POST['content']))){
            $headers = 'From: '. $_POST['email'] . "\r\n" . $_POST['username'];
            $to = 'mickael.letour@hotmail.fr';
            $subject = $_POST['subject'];
            $message = $_POST['content'];
            mail($to, $subject, $message, $headers);
            $send = ("Email Envoyé");
            $_SESSION['emailSend'] = $send;
        }
    }
    header('Location: ../../index.php#Contact');
}
    

