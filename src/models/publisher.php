<?php
class Publisher{
    private INT $idPublisher;
    private string $name;
    
    
    //getters
    public function getIdPublisher(){
        return $this -> idPublisher;
    }
    
    public function getName(){
        return $this -> name;
    }
    
    
    //setters
    public function setIdPublisher($idPublisher){
        return $this -> idPublisher = $idPublisher;
    }
    
    public function setName($name){
        return $this -> name = $name;
    }
    }