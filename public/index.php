<?php 

session_start();

require_once('../src/controllers/Homepage.php');
require_once('../src/controllers/Fiche.php');
require_once('../src/controllers/Login.php');
require_once('../src/controllers/Logout.php');

try {

    if (isset($_GET['action']) && $_GET['action'] !== "") {
        if ($_GET["action"] == "fiche") {
            (new Fiche())->ficheBook();
        }
        elseif ($_GET["action"] == "fichevierge") {
            require("../templates/fiche_livre_vierge.php");
        }
        elseif ($_GET["action"] == "submitlogin") {
            (new Login())->submitLogin();
        }
        elseif ($_GET["action"] == "logout") {
            (new Logout())->logout();
        }
    }
    else {
        if (isset($_SESSION['loggedUser'])) {
            (new Homepage())->index();
        }
        else {
            (new Login())->displayLogin();
        }
    }
} 
catch (Exception $e) {
    $errorMessage = $e->getMessage();

    echo($errorMessage);
}



