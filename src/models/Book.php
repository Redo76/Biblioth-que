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
        $continentsDB = $db -> prepare("SELECT * FROM books");
        $continentsDB -> execute();
        $continents = $continentsDB -> fetchAll();  
    }

}




