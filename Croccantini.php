<?php

  require_once __DIR__ . '/ProdottiPerAnimali.php';

  class Croccantini extends ProdottiPerAnimali {
    public $peso = 1;

      // override
      public function __construct($_marca, $_Tipologia, $_prezzo,$_image,$_peso) {
          $this->marca = $_marca;
          $this->Tipologia = $_Tipologia;
          $this->prezzo = $_prezzo;
          $this->image = $_image;
          $this->peso = $_peso;
      }
  
      // override
      public function getInfo() {
          return "$this->marca <br>  $this->Tipologia <br> - peso netto: $this->peso Kg <br> - Prezzo: $this->prezzo €";
      }
  }

?>