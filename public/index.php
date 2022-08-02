<?php 

require_once('../src/controllers/Homepage.php');

try {

    if (isset($_GET['action']) && $_GET['action'] !== "") {
        if ($_GET["action"] == "fiche") {
            require("../templates/fiche_livre.php");
        }
        elseif ($_GET["action"] == "fichevierge") {
            require("../templates/fiche_livre_vierge.php");
        }
    }
    else {
        (new Homepage())->index();
    }
} 
catch (Exception $e) {
    $errorMessage = $e->getMessage();

    echo($errorMessage);
}



