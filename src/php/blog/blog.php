<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Mon super Blog</title>
        <link href="/php/phpisback/src/css/blog/blog.css" rel="stylesheet" type="text/css" />

    </head>
 
    <body> 
        <?php 
            include("../pageStructure/header.php");
            include ("../database/databaseBlog.php");
            $db = new BlogBase();
            if(isset($_GET["id"])){
                //include("../database/databaseBlog.php");
                $id_billet = htmlspecialchars($_GET["id"]);
                $billet = $db->getBillet($id_billet);
                if ($billet != null){
                    $billet->display(false);
                    $commentaires = $db->getCommentaires($id_billet);
                    if (!empty($commentaires)){
                        foreach($commentaires as $com){
                            $com->display();
                        }
                    }else{
                        echo "<h4>Il n'y a aucun commentaires, ajoutez en un !</h4>";
                    }

                }else{
                    echo "<h4>Aucun Billets référencé à $id_billet </h4>";
                }
                echo "<a href=\"/php/phpisback/src/php/blog/blog.php\">Retour</a><br /> "; 
            
            }else {
                $billets = $db->getBilletsList();
                if (!empty($billets)){
                    foreach($billets as $billet){
                        $billet->display(true);
                    }
                }  
            }
              
        ?>
    </body>
</html>