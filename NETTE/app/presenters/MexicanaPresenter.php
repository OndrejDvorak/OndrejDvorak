<?php

namespace App\Presenters;





class MexicanaPresenter extends BasePresenter
{
    public function createComponentMexicana($name) {
        return new \Mexicana($this, $name);
    }
    
    
    
    public function actionSuccess(){
        $params = $this->getRequest();
        $this->template->params = $params->post;
    }
}
