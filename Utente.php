<?php

class Utente {
  public $nome;
  public $email;

  public $sconto = 0;
  public $saldo = 0;

  protected $prodottiScelti = [];

  public function __construct($_nome, $_email) {
    $this->nome = $_nome;
    $this->email = $_email;
  }

  public function aggiungiProdotto($prodotto) {
    $this->prodottiScelti[] = $prodotto;
    var_dump("dawad");
  }

  public function getProdottiScelti() {
    return $this->prodottiScelti;
  }

  public function calcolaPrezzoTotale() {
    // Facciamo la somma dei prezzi dei prodotti scelti
    $sommaTotale = 0;
    foreach($this->prodottiScelti as $prodotto) {
        $sommaTotale += $prodotto->prezzo;
    }

    // Leviamo lo sconto
    $sommaTotale -= $sommaTotale * $this->sconto / 100;

    return $sommaTotale;
  }

  public function effettuaPagamento() {
    $totaleDaPagare = $this->calcolaPrezzoTotale();
    var_dump($totaleDaPagare);

    if($this->saldo < $totaleDaPagare) {
      die('Saldo non disponibile');
    } else {
      return 'ok';
    }
  }
}

?>