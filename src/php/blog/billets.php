<?php

    class Billet
    {
    private $titre;
    private $contenu;
    private $date;
    private $id_billets;

    function __construct($id,$titre,$contenu, $date){
        $this->id_billets = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date = $date;
    }

    public function display(bool $comm){
        $billet = "<h3 class=\"news\"> $this->titre le $this->date</h3>
        <p class=\"news\">$this->contenu<br />";
        if ($comm){
            $billet = $billet . "<a href=\"blog.php?id=$this->id_billets\">Commentaires</a></p>";
        }
        echo $billet;
    }
}

?>