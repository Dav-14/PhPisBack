<?php
    include("database.php");


    class Message{

        public string $pseudo;
        public string $message;

        function __construct($pseudo, $message){
            $this->pseudo = $pseudo;
            $this->message = $message;
        }
    }


    class ChatBase extends DataBase
    {
        function last10Message (): array{
            $req = $this->bdd->prepare('SELECT id,pseudo,message FROM minichat ORDER BY ID DESC LIMIT 0,10');
            $req->execute();
    
            $array = array();
            while ($data = $req->fetch()){
                //print_r($data["message"]);
                $array[$data["id"]] = new Message($data["pseudo"], $data['message']);
            }

            $req->closeCursor();
            return $array;
        }
    
        function newMessage($pseudo, $message){
            $req = $this->bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
            $req->execute(array(
                "pseudo" => $pseudo,
                "message" => $message
            ));  
            
            $req->closeCursor();
        }
    }

    
    


?>