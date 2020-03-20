<?php


namespace App\Presenters;


class NonamePresenter extends BasePresenter {

    public function renderDefault() {

        $this->template->radek = 10;
        $this->template->sloupec = 5;


        $users = new \Models\Users();
        $this->template->users = $users->getAllUsers();
    }

}
