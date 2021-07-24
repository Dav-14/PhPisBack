<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MiniChat</title>
    </head>
 
<form method="post" action="../cibleform/minichat_post.php"> 
    <label for="pseudo">Firstname : <input type="text" name="pseudo" value="Dav-14"/></label><br />
    <label for="message">Message <input type="text" name="message" /></label><br />
    <input type="submit" value="Valid"/> 
</form>  

<div>
    <?php 
        include ("../database/databaseChat.php");
        $bdd = new ChatBase();
        $array = $bdd->last10Message();

        if (!empty($array)){
            foreach($array as $id => $message){
                $pseudo = htmlspecialchars($message->pseudo);
                $msg = htmlspecialchars($message->message);
                echo "<p> $pseudo : $msg </p><br />";
            }
        }else{
            echo "Aucun Message";
        }
    
    
    ?>    
</div>

</html>