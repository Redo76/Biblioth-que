<?php

require_once("../src/models/customer.php");


class HomeCustomer
{

    public function index()
    {
        // session_start();

        $Customer = new Customer();
        $customers = $Customer->findCustomers();

        require("../templates/membres.php");
    }
}