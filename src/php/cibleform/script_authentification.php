<?php
    if (isset($_POST["password"])){
        $password = htmlspecialchars($_POST["password"]);
        if ($password == "kangourou"){
            echo "U succesfull in";
        }else{
            echo 'Mot de passe incorrect !';
            include ("../formulaire/form_authentification.php");
        }
    }else{
        include ("../formulaire/form_authentification.php");
    }
?>

