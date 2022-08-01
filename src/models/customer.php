<?php
class customer
{

    private int $idUser;
    private string $firstName;
    private string $lastName;

    //getter
    public function getIdUser()
    {
        return $this->idUser;
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
    public function setIdUser($id)
    {
        return $this->idUser = $id;
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