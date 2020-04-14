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
class Auto extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Auto:success'));

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

        $this->addRadioList('znacka', 'Značka', ['skoda' => 'Škoda', 'citroen' => 'Citroen', 'audi' => 'Audi'])
                ->setRequired('Vyberte si značku')
                ->getSeparatorPrototype()->setName('znacka');

        $this->addRadioList('barva', 'Barva', ['cerna' => 'Černá', 'cervena' => 'Červená'])
                ->setRequired('Vyberte barvu')
                ->getSeparatorPrototype()->setName('barva');
                
        $this->addRadioList('prevodovka', 'Převodovka', ['manualni' => 'Manuální', 'automaticka' => 'Automatická'])
                ->setRequired('Vyberte převodovku')
                ->getSeparatorPrototype()->setName('prevodovka');

        $this->addSelect('motor', 'Motor', ['1.6' => '1.6', '1.9' => '1.9', '2.0' => '2.0'])
                ->setRequired('Vyberte motor')
                ->setPrompt('Vyberte motor');

        $this->addSelect('kola', 'Kola', ['15 palcu' => '15 palců', '17 palcu' => '17 palců'])
                ->setRequired('Vyberte kola')
                ->setPrompt('Vyberte kola');

        $this->addSelect('objemnadrze', 'Objem nádrže', ['50 litru' => '50 litrů', '100 litru' => '100 litrů', '200 litru' => '200 litrů'])
                ->setRequired('Vyberte objem nádrže')
                ->setPrompt('Vyberte objem nádrže');

        $this->addSelect('klimatizace', 'Klimatizace', ['nebude soucasti' => 'Nebude součástí', 'bude soucasti' => 'Bude součástí'])
                ->setRequired('Chcete klimatizaci ?')
                ->setPrompt('Chcete klimatizaci ?');
        
        $this->addSelect('vyfuk', 'Výfuk', ['normalni'=>'Normální','sportovni'=>'Sportovní','supersport'=>'SuperSport',])
                ->setRequired('Vyberte výfuk')
                ->setPrompt('Vyberte výfuk');

        $this->addTextArea('zprava', 'Poznámka', 25, 10)
                ->setRequired('Speciální přání ?')
                ->addRule(self::MAX_LENGTH, 'Nesmí mít víc než 250 znaků', 250);

        $this->addUpload('priloha', 'Příloha')
                ->setRequired('Přiložte speciální obrázek pro znak na volantu')
                ->addRule(self::IMAGE, 'Toto není obrázek');

        $this->addCheckbox('overeni', 'Ověření')
                ->setRequired('Jste robot, jdětet pryč !');

        $this->addSubmit('odeslat', 'Odeslat');
    }

}
