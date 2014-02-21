<?php

class Application_Form_Login extends Zend_Form
{


    public function init()
    {
        $this->setMethod('post');
        $this->setAction('/');
        $this->addElement('text', 'name', array('label' => 'Name'));
        $this->addElement('password', 'password', array('label' => 'Password'));
        $this->addElement('submit', 'login');
    }


}

