<?php

require_once("../src/models/Book.php");


class Homepage {
    
    public function index(){
        $Book = new Book();
        $books = $Book->findBooks();
        

        require("../templates/homepage.php");
    }


}
