<?php
class Customer
{

    private int $idCustomer;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $adress;
    private string $tel;

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
    public function getEmail()
    {
        return $this->email;
    }
    public function getAdress()
    {
        return $this->adress;
    }
    public function getTel()
    {
        return $this->tel;
    }

    //setter
    public function setidCustomer($id)
    {
        return $this->idCustomer = $id;
    }

    public function setFirstName($firstName)
    {
        return $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        return $this->lastName = $lastName;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }
    public function setAdress($adress)
    {
        return $this->adress = $adress;
    }
    public function setTel($tel)
    {
        return $this->tel = $tel;
    }
}