<?php

    class Commentaire
    {
    public $auteur;
    public $commentaire;
    public $date;

    function __construct($auteur,$commentaire,$date){
        $this->auteur = $auteur;
        $this->commentaire = $commentaire;
        $this->date = $date;
    }

    public function display(){
        echo "<div><p> $this->auteur le $this->date</p><p>$this->commentaire</p></div>";
    }
}

?>