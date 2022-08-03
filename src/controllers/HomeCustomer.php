<?php

require_once("../src/models/customer.php");


class HomeCustomer
{

    public function customers()
    {

        $Customer = new Customer();
        $customers = $Customer->findCustomers();

        // var_dump($customers);

        require("../templates/membres.php");
    }
}