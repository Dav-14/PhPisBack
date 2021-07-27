<?php

    class Commentaire
    {
        private $auteur;
        private $commentaire;
        private $date;

    function __construct($auteur,$commentaire, $date){
        $this->auteur = $auteur;
        $this->commentaire = $commentaire;
        $this->date = $date;
    }

    public function display(){
        echo "<p> $this->auteur le $this->date</p>
                <p>$this->commentaire</p>";
    }
}

?>