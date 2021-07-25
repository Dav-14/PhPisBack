<?php
    include("database.php");
    include("../pages/blog/commentaire.php");
  
    class BlogBase extends DataBase
    {
        function getBillets($id_billets):array{
            $req = $this->bdd->prepare('SELECT titre,contenu, date_creation FROM billets WHERE id = :id_billets');
            $req->execute(array(
                "id_billets" => $id_billets
            ));
    
            $array = $req->fetch();
            $req->closeCursor();
            return $array;
        }
        
        function getCommentaires($id_billets){
            $req = $this->bdd->prepare('SELECT id,auteur,commentaire,date_commentaire FROM commentaires WHERE id_billets = :id_billets ORDER BY ID DESC');
            $req->execute(array(
                "id_billets" => $id_billets
            ));
    
            $array = array();
            while ($data = $req->fetch()){
                //print_r($data["message"]);
                $array[$data["id"]] = new Commentaire($data["auteur"], $data['commentaire'],$data['date']);
            }

            $req->closeCursor();
            return $array;//Si vide, aucun commentaire présent
        }
    }
?>