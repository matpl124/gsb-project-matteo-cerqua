<?php
session_start();
$mail = "test@gmail.com";
$password = "azerty";


if(isset($_POST['submit'])){
    if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){

        if($_POST['mail'] == $mail && $_POST['password'] == $password){
        $_SESSION['mail'] = $_POST['mail'];
        header('Location: dashboard.php');
      }
        else{
        $_SESSION['error_msg'] = "<p class='err'>L'indentifiant ou le mot de passe est incorect !!</p>";
        header('Location: index.php');
     }
    }
    else{
        $_SESSION['mail_msg'] = "<p class='err'>Ceci n'est pas une adresse mail !!</p>";
        header('Location: index.php');
    }
}
else{
    header('Location: index.php');
}
?>