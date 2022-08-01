<?php
class loam
{

    private int $idLoam;
    private int $loamDate;
    private int $endDate;

    //getter
    public function getIdLoam()
    {
        return $this->idLoam;
    }

    public function getLoamDate()
    {
        return $this->loamDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    //setter
    public function setIdLoam($id)
    {
        return $this->idLoam = $id;
    }

    public function setLoamDate($date)
    {
        return $this->loamDate = $date;
    }

    public function setEndDate($eDate)
    {
        return $this->endDate = $eDate;
    }
}