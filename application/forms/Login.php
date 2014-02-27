<?php

class Application_Form_Login extends Zend_Form
{


    public function init()
    {
        $this->setAction('/index/login')
            ->setMethod('post');
            // ->setElementsBelongTo('login');

        $this->addElement('text', 'username', array('label' => 'Login'))
            ->addElement('password', 'password',  array('label' => 'Password'))
            ->addElement('submit', 'login', array('label' => 'Sign in'));
    }


}

