<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
       $this->setMethod('post');
       $this->setAction('/');
       $this->addElement('text', 'name', array('label' => 'Name'));
       $this->addElement('text', 'login', array('label' => 'Login'));
       $this->addElement('password', 'password', array('label' => 'Password'));
       $this->addElement('submit', 'registration');
    }


}

