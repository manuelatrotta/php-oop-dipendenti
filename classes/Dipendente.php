<?php
class Dipendente {
  private $matricola;
  private $cognome;
  private $nome;
  private $indirizzo;
  private $telefono;
  private $iban;
  private $cf;

  function __construct($_matricola,$_cognome,$_nome, $_cf) {
    $this->matricola = $_matricola;
    $this->cognome = $_cognome;
    $this->nome = $_nome;
    $this->cf = $_cf;
    }
    //funzione che permette di rendere gli attributi pubblici
    public function visualizzaDipendente() {
    $result = [
        'Nome'=> $this->nome
         'Cognome'-> = $this->cognome;

    ];
}
}
} ?>
