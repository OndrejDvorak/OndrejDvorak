<?php
/**
 *  normalni trida ktera dedi predchozi abstraktni tridu
 */
class ustrednaDvorak extends ustrednyDvorak {
    /**
     *  konstanta ktera se nastavila a uz se nemeni, pristup k ni je staticky
     */
    const TYPE = 1;

   
    /**
     * funkce pro ziskani hodnoty atributu
     * @return type
     */
    public function setNapetiDvorak() {
      return $this->napetiDvorak;
  }
  
/**
 * fuknce ktera nastavi hodnotu atributu
 * @param type $napetiDvorak
 */
   public function getNapetiDvorak($napetiDvorak) {
      $this->napetiDvorak = $napetiDvorak;
  }
}
