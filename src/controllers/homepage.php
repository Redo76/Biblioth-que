<?php

require_once("../src/models/Book.php");
require_once("../src/models/Loan.php");


class Homepage {
    
    public function index(){

        $Book = new Book();
        $Loan = new Loan();

        $books = $Book->findBooks();
        
        require("../templates/homepage.php");
    }


}
