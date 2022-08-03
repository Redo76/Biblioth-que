<?php
class Loan
{

    private int $idLoan;
    private string $loanDate;
    private string $endDate;

    //getter
    public function getIdLoan()
    {
        return $this->idLoan;
    }

    public function getLoanDate()
    {
        return $this->loanDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    //setter
    public function setIdLoan($id)
    {
        return $this->idLoan = $id;
    }

    public function setLoanDate($date)
    {
        return $this->loanDate = $date;
    }

    public function setEndDate($eDate)
    {
        return $this->endDate = $eDate;
    }


    public function findLoansByBookId($bookId){
        require('../src/pdo/PDO.php');
        $loansDB = $db -> prepare("SELECT c.id_customer, c.first_name, c.last_name, c.email, c.address, c.phone  FROM loans l INNER JOIN books b ON l.id_book = b.id INNER JOIN customer c ON l.id_customer = c.id_customer  WHERE id = :id");
        $loansDB -> execute(['id' => $bookId]);
        $loans = $loansDB -> fetchAll(); 
        return $loans;
    }

    public function findCustomerByBookId($bookId){
        require('../src/pdo/PDO.php');
        $loansDB = $db -> prepare("SELECT c.id_customer, c.first_name, c.last_name, c.email, c.address, c.phone  FROM loans l INNER JOIN books b ON l.id_book = b.id INNER JOIN customer c ON l.id_customer = c.id_customer  WHERE id = :id ORDER BY l.id_loan DESC");
        $loansDB -> execute(['id' => $bookId]);
        $loans = $loansDB -> fetchAll(); 
        return $loans;
    }
}
