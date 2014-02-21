<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        // $valid = new Formvalidator('Type');
        //$this->view->valid = $valid->valid;
    }
    public function indexAction()
    {





        if(isset($_POST['name'])) {
            $show = '<p>Hello, ' .$_POST['name']. '</p>';
        } else {
            $show = new Application_Form_Login();
        }
        $this->view->show = $show;


    }

}

