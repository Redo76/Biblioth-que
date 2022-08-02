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
}