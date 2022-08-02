<?php 
require('../src/controllers/creation_membre.php');
try {
    if (isset($_GET['action']) && $_GET['action'] !== "") {
        if ($_GET["action"] == "fiche") {
            require("../templates/fiche_livre.php");
        }
        elseif ($_GET["action"] == "fichevierge") {
            require("../templates/fiche_livre_vierge.php");
        }
        elseif ($_GET["action"] == "creation_membre") {
            (new creationMembre)->creation();
        }
    }
    else {
        require("../templates/homepage.php");
    }
} 
catch (Exception $e) {
    $errorMessage = $e->getMessage();

    echo($errorMessage);
}



