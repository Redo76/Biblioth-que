<?php
class loan
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
}