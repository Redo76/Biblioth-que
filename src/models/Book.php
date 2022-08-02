<?php


class Book
{
    private INT $idBook;
    private string $title;
    private INT $quantity;
    private bool $available;
    private string $description;
    private string $publishedDate;
    private string $publisher;


    // getters
    public function GetIdBook()
    {
        return $this->idBooks;
    }
    public function GetTitle()
    {
        return $this->title;
    }
    public function GetQuantity()
    {
        return $this->quantity;
    }
    public function GetAvailable()
    {
        return $this->available;
    }
    public function GetDescription()
    {
        return $this->description;
    }
    public function GetPublishedDate()
    {
        return $this->publishedDate;
    }
    public function GetPublisher()
    {
        return $this->publisher;
    }

    //setters
    public function SetIdBook($id)
    {
        return $this->idBooks = $id;
    }
    public function SetTitle($title)
    {
        return $this->title = $title;
    }
    public function SetQuantity($title)
    {
        return $this->title = $title;
    }
    public function SetAvailable($available)
    {
        return $this->available = $available;
    }
    public function SetDescription($available)
    {
        return $this->available = $available;
    }
    public function SetPublisher($publisher)
    {
        return $this->publisher = $publisher;
    }


    public function findBooks(){
        require('../src/pdo/PDO.php');
        $booksDB = $db -> prepare("SELECT * FROM books");
        $booksDB -> execute();
        $books = $booksDB -> fetchAll(); 
        return $books;
    }


    public function findBookById($id){
        require('../src/pdo/PDO.php');
        $bookDB = $db -> prepare("SELECT * FROM books WHERE id = :id");
        $bookDB -> execute(['id' => $id]);
        $book = $bookDB -> fetchAll(); 
        return $book;
    }
}




