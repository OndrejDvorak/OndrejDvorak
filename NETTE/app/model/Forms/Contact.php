<?php

namespace Forms;



class Contact extends \Nette\Application\UI\Form {
 
    public function __construct($parent = null, $name = null) {
        parent::__construct($parent, $name);
   
    
    $this->setAction($parent->link('DvorakContact:success'));
    
    $this->setMethod("GET");
    
    $this->addText('fromEmail', 'Odesilatel')->setRequired('Email je nutny!!')
         ->addRule(\Nette\Forms\Form::EMAIL, 'Email neni platny.')
         ->setAttribute('placeholder', 'Zadejte svuj email');
    
    
 $this->addText('toEmail', 'prijemce')
      ->setValue('tatar@sssep9.cz')->setAttribute('readonly');
 
 $this->addText('fromPhone', 'Vas telefon')->setRequired('Telefon je nutný!')
      ->addRule(\Nette\Forms\Form::PATTERN, 'Telefon neni platny.', '.*[0-9].*')
       ->setAttribute('placeholder', '+420 635 674');
 
$this->addTextArea('message','Pozadavek', 40, 6);

     $this->addSubmit('odeslat', 'Odeslat');
    
     $this->onSuccess[] = [$this, 'formSubmitted'];
   
    }
    
    public function formSubmitted($form) {
        
        
        $email = new Nette\mail\Message();
        $email->addTo("kvetohlav@seznam.cz");
        
        
        echo "Odeslano";
        die;
    }
    
    
}
