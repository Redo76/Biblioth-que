<?php
class Customer
{

    private int $idCustomer;
    private int $firstName;
    private int $lastName;

    //getter
    public function getidCustomer()
    {
        return $this->idCustomer;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    //setter
    public function setidCustomer($id)
    {
        return $this->idCustomer = $id;
    }

    public function setFirstName($fName)
    {
        return $this->firstName = $fName;
    }

    public function setLastName($lName)
    {
        return $this->lastName = $lName;
    }

    public function findCustomers()
    {
        require('../src/pdo/PDO.php');
        $customersDB = $db->prepare("SELECT id_customer, first_name, last_name, email, address, phone");
        $customersDB->execute();
        $customers = $customersDB->fetchAll();
        return $customers;
    }

    // public function findCustomerById($id){
    //     require('../src/pdo/PDO.php');
    //     $bookDB = $db -> prepare("SELECT b.id as id,b.Title as Title,b.published_date as p_date,b.available as available,b.description as description,c.name as category,a.author as author,p.name as publisher FROM books b LEFT JOIN category c ON b.id_category = c.id_category LEFT JOIN author a ON b.id_author = a.id_author LEFT JOIN publisher p ON b.id_publisher = p.id_publisher WHERE id = :id");
    //     $bookDB -> execute(['id' => $id]);
    //     $book = $bookDB -> fetchAll(); 
    //     return $book[0];
    // }

}