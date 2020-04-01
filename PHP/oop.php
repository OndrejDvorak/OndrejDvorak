<?php

/**
 * inkludovani interfacu
 */
include 'class/iustrednyDvorak.php'; 
/**
 * inkludovani abstraktni tridy
 */
include 'class/ustrednyDvorak.php';  
/**
 * inkludovani dedici tridy
 */
include 'class/ustrednaDvorak.php'; 

/**
 * atribut podle ktereho nastavime napeti
 */
$napetiDvorak = 24; 
/**
 * instance tridy ustrednaDvorak
 */
$newDvorak = new ustrednaDvorak(); 
/**
 * vypsani ve var dump constanty TYPE
 */
var_dump($newDvorak::TYPE); 
/**
 * nastaveni atributu pomoci instacniho pristupu k fuknci
 */
$newDvorak->setNapetiDvorak($napetiDvorak);      
/**
 * vypsani atributu ve var dump instancnim zpusobem
 */
var_dump($newDvorak->getNapetiDvorak());  