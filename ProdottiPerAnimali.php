<?php

  class ProdottiPerAnimali {
      
    public $marca;
    public $Tipologia;
    public $prezzo;
    public $image;

    public function __construct($_marca, $_Tipologia, $_prezzo,$_image) {
      $this->marca = $_marca;
      $this->Tipologia = $_Tipologia;
      $this->prezzo = $_prezzo;
      $this->image = $_image;
    }

    public function getInfo() {
      return "$this->marca <br> $this->Tipologia <br> - Prezzo: $this->prezzo Euro";
    }
  }

?>