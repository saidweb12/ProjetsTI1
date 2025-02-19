<?php
if (isset($_GET["p"])) {
    switch ($_GET["p"]) {

        case "Geographie":
        include ("../templates/geographie.php");
        break;

        case "HistoireView":
            include ("../templates/histoire.php");
            break;

            case "":
                include ("../templates/contactView.php");
                break;


                default:
                include("../templates/error404View.php");
               


        }
    }else{
        include("../templates/accueilView.php");
    }





?>