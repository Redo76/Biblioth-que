<?php 

require_once('../src/controllers/Homepage.php');
require_once('../src/controllers/Fiche.php');

try {

    if (isset($_GET['action']) && $_GET['action'] !== "") {
        if ($_GET["action"] == "fiche") {
            (new Fiche())->ficheBook();
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



