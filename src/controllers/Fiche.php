<?php

require_once("../src/models/Book.php");
require_once("../src/models/Author.php");

class Fiche{
    
    public function ficheBook(){
        $id = $_GET['id'];
        $Book = new Book();

        $book = $Book->findBookById($id);
        // var_dump($book);
        // $authorName = $Author->findAuthorById($book['id_author']);



        require("../templates/fiche_livre.php");
    }
}
