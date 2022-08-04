<?php

require_once("../src/models/Book.php");
require_once("../src/models/Customer.php");
require_once("../src/models/Loan.php");

class Fiche{
    
    public function displayficheBook(){
        $bookId = $_GET['id'];


        $Book = new Book();
        $Customer = new Customer();
        $Loan = new Loan();

        $book = $Book->findBookById($bookId);
        $customers = $Customer->findCustomers();
        $loans = $Loan->findLoansByBookId($bookId);
        $currentCustomer = $Loan->findCurrentCustomer($bookId);

        if ($book['available'] == 1) {
            $remainingTime = $Loan->remainingLoanTime($bookId, $currentCustomer['id_customer']);
        }

        require("../templates/fiche_livre.php");
        unset($_SESSION['loan_error']);
    }

    public function submitLoan(){
        require('../src/pdo/PDO.php');

        $idCustomer = htmlspecialchars($_POST['client']);
        $dateDebut = date('Y-m-d');
        $dateFin = htmlspecialchars($_POST['finPret']);
        $idBook = $_GET['id'];

        $customerLoanDB = $db->prepare('SELECT b.available as available, l.id_customer as idCustomer, l.id_book as idBook FROM loans l INNER JOIN books b ON l.id_book = b.id WHERE l.id_customer = :id_customer AND l.id_book = :id_book ORDER BY l.id_loan DESC');
        $customerLoanDB->execute([
            "id_customer" => $idCustomer,
            "id_book" => $idBook
        ]);
        $customerLoan = $customerLoanDB->fetch();

        if (!isset($customerLoan) || $customerLoan['available'] == 0) {

            $insert = $db->prepare('INSERT INTO loans(loan_date, end_date, id_book, id_customer) VALUES(:loan_date, :end_date, :id_book, :id_customer)');
            $insert->execute([
                'loan_date' => $dateDebut,
                'end_date' => $dateFin,
                "id_customer" => $idCustomer,
                "id_book" => $idBook
            ]);

            $update = $db->prepare('UPDATE books SET available = 1 WHERE id = :id');
            $update->execute([
                'id' => $idBook
            ]);

            header('Location:  ../index.php?action=fiche&id=' . $idBook);
        }
        else {
            $_SESSION['loan_error'] = 1;
            header('Location:  ../index.php?action=fiche&id=' . $idBook);
        }
    }

    public function returnLoan(){
        require('../src/pdo/PDO.php');

        $idBook = $_GET['id'];

        $update = $db->prepare('UPDATE books SET available = 0 WHERE id = :id');
        $update->execute([
            'id' => $idBook
        ]);

        header('Location:  ../index.php?action=fiche&id=' . $idBook);
    }
}
