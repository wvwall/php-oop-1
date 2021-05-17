<?php

    class Fattura {
        private $partita_iva_mittente;
        private $partita_iva_destinatario;
        private $data_emissione;
        private $saldo;
        
        public function __construct ($partita_iva_destinatario,$data_emissione,$saldo) {
            if(!is_numeric($saldo)) {
                throw new \Exception("Saldo non numerico");
            }
            
            $this->partita_iva_destinatario = $partita_iva_destinatario;
            $this->data_emissione = $data_emissione;
            $this->saldo = $saldo;
        }

        //get e set 
        public function getIvaMittente() {
            return $this->partita_iva_mittente;
        }
        public function setIvaMittente($partita_iva_mittente) {
            $this->partita_iva_mittente = $partita_iva_mittente;
        }

        //get e set 
        public function getIvaDestinatario() {
            return $this->partita_iva_destinatario;
        }
        public function setIvaDestinatario($partita_iva_destinatario) {
            $this->partita_iva_destinatario = $partita_iva_destinatario;
        }

        //get e set 
        public function getDataEmissione() {
            return $this->data_emissione;
        }
        public function setDataEmissione($data_emissione) {
            $this->data_emissione = $data_emissione;
        }

        //get e set 
        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }
    }