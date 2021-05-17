<?php 

    trait PartitaIva {
        private $codeIva;
        private $address;
        private $name_azienda;


        //get e set 
        public function getCodeIva() {
            return $this->codeIva;
        }
        
        public function setCodeIva($codeIva) {
            $this->codeIva = $codeIva;
        }
        //get e set 
        public function getAddress() {
            return $this->address;
        }
        
        public function setAddress($address) {
            $this->address = $address;
        }
        //get e set 
        public function getNameAzienda() {
            return $this->name_azienda;
        }
        
        public function setNameAzienda($name_azienda) {
            $this->name_azienda = $name_azienda;
        }
    }