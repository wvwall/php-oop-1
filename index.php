<?php
    require_once "./user.php";
    require_once "./fattura.php";

   $user = new User("Walter","Velardo","21-06-1995","1234","Via Torino","Google");

   
   $fattura2 = new Fattura("8765","15-05-2021", 100.50);

   try {
    $fattura1 = new Fattura("5678","14-05-2021", "Ciao");
   }catch(Exception $e) {
       
       echo "Errore:" . $e->getMessage();
   }

  /*  var_dump($user);
   var_dump($fattura1);
   var_dump($fattura2); */

   $user->insertFatturaInFatture($fattura1);
   $user->insertFatturaInFatture($fattura2);

   var_dump($user);

   var_dump($user->getFatture()[0]->getSaldo()); //prendere saldo della fattura con alla prima posizione