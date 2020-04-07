<?php

declare(strict_types=1);


/**
 * abstraktni trida ktera se neda instancovat a implementuje interface
 */
abstract class ustrednyDvorak implements iustrednyDvorak {
     /**
  *atribut ktery je pristupny jen ve tride a tridach dedicich
  * @var type 
  */
    protected $napetiDvorak; 
  
  /**
   *funkce pro ziskani hodnoty atributu implementovana z interfacu
   * @return type
   */
  
    function getNapetiDvorak() : int {
      return $this->napetiDvorak;
  }

  /**
   * fuknce ktera nastavi hodnotu atributu implementovana z interfacu
   * @param type $napetiDvorak
   */
   
  function setNapetiDvorak(int $napetiDvorak) {
      $this->napetiDvorak = $napetiDvorak;
  }
}
