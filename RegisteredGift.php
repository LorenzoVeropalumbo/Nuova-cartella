<?php

  trait RegisteredGift{
    public $buoniAcquisto = 1;
    
    public function newDiscount(){
      return rand(1,50);
    }
  }


?>