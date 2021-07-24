<?php
    include ("../database/databaseChat.php");
    if (isset($_POST["pseudo"]) && isset($_POST['message'])){
        $bdd = new ChatBase();
        $bdd->newMessage($_POST['pseudo'], $_POST['message']);
    }
    header('Location: ../formulaire/minichat.php');
    exit;
?>
