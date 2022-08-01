<?php 

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
        require("../templates/homepage.php");
    }
} 
catch (Exception $e) {
    $errorMessage = $e->getMessage();

    echo($errorMessage);
}



