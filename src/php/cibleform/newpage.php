<?php

include("../header.php");

if (key_exists("firstname",$_POST) && key_exists("lastname",$_POST) && key_exists("repeat",$_POST)){
    
    $repeat = (int) $_POST["repeat"];//Si text alors vaut 0 sinon vaut repeat

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);

    /* Faille XSS, injection HTML possible
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    */

    $lastname = strtoupper($lastname);//UPPER CASE

    for ($nRepeat = 0; $nRepeat < $repeat; $nRepeat++){
        echo "<p>Bonjour <strong>$lastname $firstname</strong></p>";
    }
}
else{
    echo "<p>Il manque 1 ou des paramètres</p>";
}

?>