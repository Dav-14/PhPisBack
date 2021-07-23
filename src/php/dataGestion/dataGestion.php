<?php 

function DeleteExtension($filename){
    $position = strpos($filename,".");
    return substr($filename, 0, $position);
}


function GetExtension($filename){
    return pathinfo($filename, PATHINFO_EXTENSION);

}

class DataGestion {

    private $locationDir = "/php/phpisback/data/";
    private $BiggerIntImgName = 0;

    function __construct(){
        $this->scanImgDir();
    }

    function scanImgDir(){
        $scandir = scandir($_SERVER["DOCUMENT_ROOT"] . $this->locationDir . "img/");
        foreach($scandir as $file){
            $fileWithoutExtension = DeleteExtension($file);
            if (((int) $fileWithoutExtension) > 0){
                $fileIntName = (int) $fileWithoutExtension;
                if ($fileIntName > $this->BiggerIntImgName){
                    $this->BiggerIntImgName = $fileIntName;
                }
            }
        }

    }

    public function getNextImgName(){
        return $this->BiggerIntImgName + 1;
    }

    
}
?>