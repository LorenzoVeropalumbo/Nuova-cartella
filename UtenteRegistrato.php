<?php

require_once __DIR__ . '/Utente.php';
require_once __DIR__ . '/RegisteredGift.php';


class UtenteRegistrato extends Utente {
  use RegisteredGift;
  // override
  public $sconto = 20;
  public $saldo = 200;
}

?>