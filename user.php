<?php

    require_once "./partitaIva.php";

    class User {

        use PartitaIva;

      private $name;
      private $surname;
      private $birth_date;
      private $fatture = [];

      public function __construct ($name,$surname,$birth_date, $codeIva,$address, $name_azienda) {
          $this->name = $name;
          $this->surname = $surname;
          $this->birth_date = $birth_date;
        
          $this->setCodeIva($codeIva);
          $this->setAddress($address);
          $this->setNameAzienda($name_azienda);
      }

    //get e set 
    public function getName() {
        return $this->name;
    }
      
    public function setName($name) {
        $this->name = $name;
    }

    //get e set 
    public function getSurname() {
        return $this->surname;
    }
      
    public function setSurname($surname) {
        $this->surname = $surname;
    }

    //get e set 
    public function getBithDate() {
        return $this->birth_date;
    }
      
    public function setBirthDate($birth_date) {
        $this->birth_date = $birth_date;
    }

     //get e insert 
     public function getFatture() {
        return $this->fatture;
    }
      
    public function insertFatturaInFatture($fattura) {
        $this->fatture[] = $fattura;
    }
    
}