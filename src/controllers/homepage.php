<?php

require_once("../src/models/Book.php");


class Homepage {
    
    public function index(){
        session_start();

        $Book = new Book();
        $books = $Book->findBooks();
        
        var_dump($_SESSION);

        require("../templates/homepage.php");
    }


}
