<?php
    if (isset($_POST["password"])){
        if ($_POST["password"] == "kangourou"){
            echo "U succesfull in";
        }else{
            echo 'Mot de passe incorrect !';
        }
    }
?>

<form method="post" action="form_authentification.php">

<label for="lastname">Super user password : <input type="password" name="password" value=""/></label><br />

<input type="submit" value="Valid"/> 

</form>