<?php

    if(isset($_POST["id_billet"])){
        include("../database/databaseBlog.php");
        $db = new BlogBase();
        $id_billet = htmlspecialchars($_POST["id_billets"]);
        $billet = $db->getBillets($id_billet);
        if (!empty($billet)){
            $commentaires = $db->getCommentaires($id_billet);
            if (!empty($commentaires)){
                foreach($commentaires as $com){
                    $com->display();
                }
            }else{
                echo "Il n'y a aucun commentaires, ajoutez en un !";
            }
        }else{
            echo "Aucun Billets référencé à $id_billet <br/>";
        }
 
    }


?>