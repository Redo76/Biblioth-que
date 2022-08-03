<?php 

session_start();

require_once('../src/controllers/Homepage.php');
require_once('../src/controllers/Fiche.php');
require_once('../src/controllers/Login.php');
require_once('../src/controllers/Logout.php');
require_once('../src/controllers/HomeCustomer.php');
require_once('../src/controllers/CreationMembre.php');

try {

    if (isset($_GET['action']) && $_GET['action'] !== "") {
        // if (isset($_SESSION['loggedUser'])) {
            if ($_GET["action"] == "fiche") {
                (new Fiche())->displayficheBook();
            }
            elseif ($_GET["action"] == "loan") {
                (new Fiche())->submitLoan();
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
            elseif ($_GET["action"] == "creation_membre") {
                (new creationMembre)->displayForm();
            }
            elseif ($_GET["action"] == "submitCreation_membre") {
                (new creationMembre)->creation();
            }
            elseif ($_GET["action"] == "membres") {
                (new HomeCustomer())->customers();
            }
        // }
        // else {
        //     (new Login())->displayLogin();
        // }
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



