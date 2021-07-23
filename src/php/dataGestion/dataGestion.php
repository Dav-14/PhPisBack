<?php 

class DataGestion {

    private $locationDir = "/php/phpisback/data/";
    private $BiggerIntImgName = 0;

    function __construct(){
        scanImgDir();
    }


    private function DeleteExtension($filename){
        $position = strpos($file_name,".");
        return substr($file_name, 0, $position);
    }

    function scanImgDir(){
        $scandir = scandir($this->locationDir . "img/");
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

    function getNextImgName(){
        return $this->BiggerIntImgName + 1;
    }
}
?>