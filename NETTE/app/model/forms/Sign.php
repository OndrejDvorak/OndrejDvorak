<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignNguyen
 *
 * @author Dancing Rain
 */
class Sign extends Nette\Application\UI\Form{
    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link('Sign:forgotPassword'));
        
        $this->setMethod("formSubmitted");
        
        $this->addEmail('email', 'Email')
                ->setRequired(' email is needed')
                ->addRule(\Nette\Forms\Form::EMAIL, 'Not an valid address');
        
        $this->addSubmit('send', 'Send');
        
   
        
    }
}
