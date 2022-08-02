<?php

require_once("../src/models/Book.php");


class Homepage {
    
    public function index(){
        $book = new Book;
        $books = $book->findBooks();
        

        require("../templates/homepage.php");
    }


}
