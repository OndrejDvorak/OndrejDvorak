<?php

declare(strict_types=1);

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
    public function getNapetiDvorak() : int {
        return $this->napetiDvorak;
    }

    /**
     * fuknce ktera nastavi hodnotu atributu
     * @param type $napetiDvorak
     */
    public function setNapetiDvorak( int $napetiDvorak) {
        $this->napetiDvorak = $napetiDvorak;
    }

}
