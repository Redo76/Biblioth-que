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
}