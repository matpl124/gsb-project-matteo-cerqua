<?php
session_start();

$btnDeco = "";

if(isset($_SESSION['mail'])){
    if(isset($_SESSION['mail_msg'])){
        unset($_SESSION['mail_msg']);
    }
}

if(isset($_SESSION['mail'])){
    if(isset($_SESSION['error_msg'])){
        unset($_SESSION['error_msg']);
    }

    $btnDeco = 'Déconnexion';

    $title = "Bonjour " .   $_SESSION['mail'];

}
else{
    $title = "Veuillez vous connecter pour accéder à votre dashboard";
    $btnDeco = 'Se connecter';
};

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <nav>
        <h1><?php echo $title; ?></h1>
        <form action="index.php" method="post">
            <input type="submit" value='<?php echo $btnDeco; ?>' name="deco">
        </form>
    </nav>
</body>
</html>