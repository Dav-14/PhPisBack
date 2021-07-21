<?php

include("../header.php");

if (key_exists("firstname",$_GET) && key_exists("lastname",$_GET) && key_exists("repeat",$_GET)){
    
    $repeat = (int) $_GET["repeat"];//Peut valoir 0, si on a du text dans repeat  

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];

    $lastname = strtoupper($lastname);//UPPER CASE

    for ($nRepeat = 0; $nRepeat < $repeat; $nRepeat++){
        echo "<p>Bonjour <strong>$lastname $firstname</strong></p>";
    }
}
else{
    echo "<p>Il manque 1 ou des paramètres</p>";
}

?>