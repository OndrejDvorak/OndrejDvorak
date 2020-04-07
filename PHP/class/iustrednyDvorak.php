<?php
/**
 *  interface ve kterem jsou predem dane funkce ktere musi class implementovat
 */
interface iustrednyDvorak {
    /**
     * funkce ktera se musi implementovat
     */
    function getNapetiDvorak() : int; 
    /**
     * 
     * @param int $napetiDvorak
     */
    function setNapetiDvorak(int $napetiDvorak);
}
