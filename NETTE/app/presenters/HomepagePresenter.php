<?php

namespace App\Presenters;

Class HomepagePresenter extends BasePresenter {

    public function renderDefault() {
        $this->template->anyVariable = 'any value';
    }

    public function actionDetail() {

        $this->template->rows = 10;
        $this->template->collums = 8;
    }

}
