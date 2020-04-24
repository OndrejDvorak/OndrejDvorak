<?php

/*-
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auto
 *
 * @author Ondřej Dvořák
 */
class Pivo extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Pivo:success'));

        $this->setMethod("POST");

        $this->addText('uzivatelskeJmeno', 'Uživatelské jméno')
                ->setRequired('Potřebujete účet')
                ->addRule(self::PATTERN, 'Není uživatelské jméno', '[A-Za-z].*[A-Za-z0-9].*');

        $this->addPassword('heslo', 'Heslo')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Musí obsahovat minimálně 8 znaků', 8);

        $this->addPassword('heslo2', 'Opakujte heslo')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Není stejné', $this['heslo']);

        $this->addEmail('email', 'Email')
                ->setRequired(' Email je potřeba')
                ->addRule(\Nette\Forms\Form::EMAIL, 'Email není validní');
        
        $this->addEmail('email2', 'Opakujte Email')
                ->setRequired('Je potřeba potvrdit Email')
                ->addRule(self::EQUAL, 'Neshodují se', $this['email']);

        $this->addText('jmeno', 'Jméno')
                ->setRequired('Jak se jmenujete ?')
                ->addRule(self::PATTERN, 'Toto není jméno', '.*[A-Za-z].*');

        $this->addText('cislo', 'Číslo')
                ->setRequired('Kontaktujeme Vás až bude vše připraveno')
                ->addRule(\Nette\Forms\Form::PATTERN, 'Toto není číslo.', '([0-9]){9}');

        $this->addText('adresa', 'Adresa')
                ->setRequired('Potřebujeme adresu pro správné doručení')
                ->addRule(self::PATTERN, 'Toto není adresa', '.*[a-zA-Z]+ [0-9].*');

        $this->addRadioList('rychlost', 'Rychlost doručení', ['30min' => 'Expresní= 30 minut', 'normalni' => 'Normální = 60 minut', 'zdarma' => 'Zdarma = 90 minut'])
                ->setRequired('Vyberte si rychlost doručení')
                ->getSeparatorPrototype()->setName('Rychlost doručení');

        $this->addRadioList('nazev', 'Název piva', ['preparator' => 'Preparátor', 'ultimatniNakourenySpecial' => 'Ultimátní nakouřený speciál', 'kladenskaZare' => 'Kladenská záře'])
                ->setRequired('Vyberte značku piva')
                ->getSeparatorPrototype()->setName('Značka piva');
                
        $this->addRadioList('obsahAlkoholu', 'Obsah alkoholu', ['10' => '10°', '11' => '11°', '12' => '12°'])
                ->setRequired('Vyberte obsah alkoholu')
                ->getSeparatorPrototype()->setName('Obsah alkoholu');

        $this->addSelect('slad', 'Slad', ['svetly' => 'Světlý', 'karamelovy' => 'Karamelový', 'bavorsky' => 'Bavorský'])
                ->setRequired('Vyberte slad')
                ->setPrompt('Vyberte slad');

        $this->addSelect('chmel', 'Chmel', ['zatecky' => 'Žatecký poloraný červeňák', 'sladek' => 'Sládek', 'bohemie' => 'Bohemie'])
                ->setRequired('Vyberte chmel')
                ->setPrompt('Vyberte chmel');

        $this->addSelect('kvaseni', 'Kvašení', ['spontanni' => 'Spontánní', 'svrchne' => 'Svrchně', 'spodne' => 'Spodně'])
                ->setRequired('Vyberte způsob kvašení')
                ->setPrompt('Vyberte způsob kvašení');

        $this->addSelect('baleni', 'Balení', ['sklenenaLahev' => 'Skleněná láhev', 'plastovaLahev' => 'Plastová láhev'])
                ->setRequired('Vyberte balení')
                ->setPrompt('Vyberte balení');
        
        $this->addSelect('platba', 'Platba', ['hotove'=>'Hotově','kartou'=>'Kartou'])
                ->setRequired('Vyberte způsob platby')
                ->setPrompt("platba");

        $this->addTextArea('zprava', 'Poznámka', 25, 10)
                ->setRequired('Speciální přání ?')
                ->addRule(self::MAX_LENGTH, 'Nesmí mít víc než 250 znaků', 250);

        $this->addUpload('priloha', 'Příloha')
                ->setRequired('Přiložte speciální obrázek pro tisk Vaší etikety')
                ->addRule(self::IMAGE, 'Toto není obrázek');

        $this->addCheckbox('overeni', 'Ověření')
                ->setRequired('Jste robot, jdětet pryč !');

        $this->addSubmit('odeslat', 'Odeslat');
    }

}
