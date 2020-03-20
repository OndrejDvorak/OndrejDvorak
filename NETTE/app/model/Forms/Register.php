<?php


class Register extends \Nette\Forms\Form {
    
    public function __construct($parent, $name){
        parent::__construct($name);
        
        $this->setAction($parent->link("Jenda:success"));
        
        $this->setMethod("GET");
        
        $this->addEmail('email', 'Email')
             ->setRequired(TRUE)
             ->addRule(\Nette\Forms\Form::EMAIL, 'Toto neni email')  ;
        
        $this->addCheckbox('sex', 'sex');
        
        $this->addRadioList('internet', 'internet', array('vodafone', 'O2'));
        
        $this->addCheckboxList('skola', 'skola', array('VS', 'SS', 'ZS'));
        
        $this->addPassword('heslo', 'Heslo')
            ->setRequired(TRUE)
            ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Heslo musi mit 6 znaku', 6);
        
        $this->addPassword('heslo2', 'heslo znova')
            ->setRequired(TRUE)
            ->addRule(\Nette\Forms\Form::EQUAL, 'Hesla nesouhlasi !!', $this['heslo']);
        
    $this->addText('jmeno','jmeno')
          ->setRequired('jmeno kaspare');  
     
        
        $this->addText('cislo', 'cislo')->setRequired('cislo kundo')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Neni cislo.');
        
        $this->addSubmit('odeslat', 'Odeslat');
        
        return $this;
        
    }
    
    }
  
