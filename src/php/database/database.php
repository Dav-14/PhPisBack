<?php
   
class DataBase
{

    protected PDO $bdd;

    function __construct(){
        try {
            $this->bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function isClientsExist($email): bool{
        $req = $this->bdd->prepare('SELECT * FROM users WHERE email = :email');
        $req->execute(array('email' => $email));

        if ($data = $req->fetch()){
            $req->closeCursor();
            return true;
        }
        $req->closeCursor();
        return false;
        
    }
    
    function updateEmail(User $c, $email){
        $req = $this->bdd->prepare('UPDATE users SET email WHERE email = :email');
        $req->execute(array('email' => $email));
        $req->closeCursor();

    }
    
    function addClients(){
        $req = $this->bdd->prepare('INSERT INTO users(email, nom, prenom, password) VALUES(:email, :nom, :prenom, :password)');
        $req->execute(array(
            'email' => $email,
            'nom' => $nom,
            'prenom' => $prenom,
            'password' => $password
        ));
        $req->closeCursor();

    
    }
}


?>