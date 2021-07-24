<?php
    class User
    {
        private int $id;
        private string $email;
        private string $nom;
        private string $prenom;
        private string $passwordHash;
        
        function __construct($id, $email, $nom, $prenom, $passwordHash){
            $this->id = $id;
            $this->email = $email;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->passwordHash = $passwordHash;
        }


        
    }    
?>
