<?php
    include("../database/database.php");


    function main(){
        $bdd = new DataBase();
        $bdd->isClientsExist("blabl@gmail.com");


    }
    

    if (isset($_POST["password"])){
        $password = htmlspecialchars($_POST["password"]);
        if ($password == "kangourou"){
            echo "U succesfull in";
            main();
        }else{
            echo 'Mot de passe incorrect !';
            include ("../formulaire/form_authentification.php");
        }
    }else{
        include ("../formulaire/form_authentification.php");
    }
?>

