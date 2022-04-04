<?php 

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{

    private $form;
    private $result;

    public function __construct()
    {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams()
    {
        $this->form->credit_amount = getFromRequest('credit_amount');
        $this->form->percent = getFromRequest('percent');
        $this->form->op = getFromRequest('op');
    }

    public function validate()
    {

        if (!(isset($this->form->credit_amount) && isset($this->form->percent) && isset($this->form->op))) {
            return false;
        }


        if ($this->form->credit_amount == "") {
            getMessages()->addError('Nie podano pierwszej wartosci');
        }
        if ($this->form->percent == "")
           getMessages()->addError('Nie drugiej wartosci!');


        if (! getMessages()->isError()) {
            if (!is_numeric($this->form->credit_amount)) {
                getMessages()->addError('Błąd! Podaj liczbę');
            }
            if (!is_numeric($this->form->percent)) {
                getMessages()->addError('Błąd! Podaj liczbę');
            }
        }

        return ! getMessages()->isError();
    }

    public function action_calcCompute(){

        $this->getparams();

        if ($this->validate()) {

            //konwersja na int
            $this->form->credit_amount = intval($this->form->credit_amount);
            $this->form->percent = intval($this->form->percent);

            //za pomoca switch, wybiera odpowiednią ilość miesięcy do algorytmu
            switch ($this->form->op) {
                case '1':
                    $this->months = 12; //1
                    break;
                case '2':
                    $this->months = 24; //2
                    break;
                case '3':
                    $this->months = 36; //3
                    break;
                case '4':
                    $this->months = 60; //5
                    break;
                case '5':
                    $this->months = 120; //10
                    break;
            }
            
            $this->result->result = ($this->form->credit_amount + (($this->form->credit_amount * $this->form->percent) / 100)) / $this->months;
        }
        $this->generateView();
    }

    public function action_calcShow(){
		$this->generateView();
	}

    //generowanie widoku 
    public function generateView()
    {
        global $user;

        getSmarty()->assign('user',unserialize($_SESSION['user']));      
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);
        getSmarty()->display('app.tpl');
    }
}
