<?php

require_once("../src/models/Book.php");

class Fiche{
    
    public function ficheBook(){
        $id = $_GET['id'];
        $Book = new Book();

        $book = $Book->findBookById($id);
        // var_dump($book);

        require("../templates/fiche_livre.php");
    }
}
