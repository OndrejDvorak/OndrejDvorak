<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of Auto
 *Formular na koupi auta
 * @author Ondřej Dvořák
 */
class AutoPresenter extends \Nette\Application\UI\Presenter{
   
     public function createComponentAuto($name) {
        return new \Auto($this, $name);
    }
 
    
    public function actionSuccess(){
       $params = $this->getRequest();
        $this->template->params = $params->post;
        
    }
}
