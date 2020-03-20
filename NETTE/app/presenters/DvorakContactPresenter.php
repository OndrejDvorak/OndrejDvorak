<?php



namespace App\Presenters;

class SuchanekContactPresenter extends BasePresenter{
    
    
    
    public function renderDefault() {
        
    }
    
   public function createComponent($name) {
       return new \Forms\Contact($this, $name);
   }
}
