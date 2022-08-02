<?php
class Author{
    private INT $id_author;
    private string $firstName;
    private string $lastName;


    //getters
    public function getIdAuthor(){
    return $this -> idAuthor;
    }

    public function getFirstName(){
    return $this -> firstName;
    }

    public function getLastName(){
    return $this -> lastName;
    }

    //setters
    public function setIdAuthor($id_author){
    return $this -> idAuthor = $id_author;
    }

    public function setFirstName($firstName){
    return $this -> firstName = $firstName;
    }
    public function setLastName($lastName){
    return $this -> lastName = $lastName;
    }


    public function findAuthorById($authId){
        require('../src/pdo/PDO.php');
        $bookDB = $db -> prepare("SELECT author FROM author WHERE id = :id");
        $bookDB -> execute(['id' => $authId]);
        $book = $bookDB -> fetchAll(); 
        return $book[0];
    }
}