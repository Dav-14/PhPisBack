<?php
    header("Location: /php/phpisback/index.php");
    include "../dataGestion/dataGestion.php";
    //echo ("Verification du fichier ! <br />");
    if (isset($_FILES["mytmpfile"]) && $_FILES["mytmpfile"]['error'] == 0){
        //Pas d'érreur d'envoi et le fichier est là
        //echo ("Verification de la taille du fichier !<br />");
        //echo ("taille : ".$_FILES["mytmpfile"]["size"] . "<br />");
        if ($_FILES["mytmpfile"]["size"] <= 1000000){
            //<= 1mo
            //echo ("Verification de l'extension ! <br />");
            $infofichier = pathinfo($_FILES["mytmpfile"]["name"]);
            $extension_upload = $infofichier["extension"];
            $extension_autorisees = array('jpg','jpeg','png','gif');
            if (in_array($extension_upload,$extension_autorisees)){
                //echo ("Everything is OK ! <br />");
                if (is_uploaded_file($_FILES["mytmpfile"]["tmp_name"])){
                    $dg = new DataGestion();
                    $name = $dg->getNextImgName();
                    $extention = GetExtension($_FILES['mytmpfile']['name']);
                    if (move_uploaded_file($_FILES['mytmpfile']['tmp_name'], '../../../data/img/' . $name . "." . $extention)){
                        //echo "L'envoi a bien été effectué ! <br />";
                        exit();
                    }
                }
                
            }
        }
    }


?>