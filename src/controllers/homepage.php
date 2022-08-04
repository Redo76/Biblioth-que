<?php

require_once("../src/models/Book.php");
require_once("../src/models/Loan.php");


class Homepage {
    
    public function index(){

        $Book = new Book();
        $Loan = new Loan();

        $books = $Book->findBooks();
        
        require("../templates/homepage.php");
        unset($_SESSION['errorDelete']);
    }

    public function deleteLoanedBook(){
        
        $Book = new Book();

        if ($_GET['status'] == 0) {
            $Book->deleteBook($_GET["id"]);
            header("location: ../index.php");
        }
        else {
            header("location: ../index.php");
            $_SESSION["errorDelete"] = "Le livre est actuellement emprunté";
        }
    }
}
