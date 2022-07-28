<?php

require_once __DIR__ . '/Utente.php';

class UtenteRegistrato extends Utente {
  // override
  public $sconto = 20;
}

?>