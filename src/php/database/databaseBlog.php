<?php
    include("database.php");
    include("../blog/commentaire.php");
    include("../blog/billets.php");
  
    class BlogBase extends DataBase
    {
        function getBillet($id_billet){
            $req = $this->bdd->prepare('SELECT titre,contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y %Hh%imin%ss\') as date FROM billets WHERE id = :id_billets');
            $req->execute(array(
                "id_billets" => $id_billet
            ));
    
            $data = $req->fetch();
            $req->closeCursor();
            if(!empty($data)){
                return new Billet($id_billet,$data["titre"], $data['contenu'],$data['date']);;
            }else{
                return null;
            }
        }
        
        function getCommentaires($id_billets):array{
            $req = $this->bdd->prepare('SELECT id,auteur,commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y %Hh%imin%ss\') as date FROM commentaires WHERE id_billet = :id ORDER BY ID DESC LIMIT 0,10');
            $req->execute(array(
                "id" => $id_billets
            ));
    
            $array = array();
            while ($data = $req->fetch()){
                //print_r($data["message"]);
                $array[$data["id"]] = new Commentaire($data["auteur"], $data['commentaire'],$data['date']);
            }

            $req->closeCursor();
            return $array;//Si vide, aucun commentaire présent
        }

        function getBilletsList():array{
            $req = $this->bdd->prepare('SELECT id,titre,contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y %Hh%imin%ss\') as date FROM billets ORDER BY ID DESC');
            $req->execute();
            $array = array();
            while ($data = $req->fetch()){
                $array[] = new Billet($data["id"],$data["titre"], $data['contenu'],$data['date']);
            }

            $req->closeCursor();
            return $array;//Si vide, aucun commentaire présent
        }

    }
?>