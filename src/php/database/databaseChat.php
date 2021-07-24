<?php
    class Message{

        private string $pseudo;
        private string $message;

        function __construct($pseudo, $message){
            $this->pseudo = $pseudo;
            $this->message = $message;
        }
    }


    class ChatBase extends DataBase
    {
        function __construct(){
            parrent::__construct();
        }
    }

    function last10Message (): array{
        $req = $this->bdd->prepare('SELECT * FROM minichat ORDER BY id DESC LIMIT 0,10');
        $req->execute();

        $array = array();
        /*while ($data = $req->fetch()){
            $array[] = $data;
        }*/
        return $array;
    }

    function newMessage(Message $msg){
        $req = $this->bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
        $req->
    
    
    }
    


?>