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

  public function effettuaPagamento($cartaPrepagata) {
    $totaleDaPagare = $this->calcolaPrezzoTotale();

    if($cartaPrepagata->saldo < $totaleDaPagare) {
      throw new Exception("Utente: $this->nome: Saldo non disponibile sulla carta");
    } else {
      return 'ok';
    }
  }
}

?>