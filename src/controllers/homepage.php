<?php

require_once("../src/models/Book.php");


class Homepage {
    
    public function index(){

        $Book = new Book();
        $books = $Book->findBooks();
        
        var_dump($_SESSION);

        require("../templates/homepage.php");
    }


}
