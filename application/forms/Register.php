<?php

class Application_Form_Register extends Zend_Form
{

    public function init()
    {
        $this->setMethod('post')
            ->setAction('/registration');

        $username = $this->createElement('text', 'username');
        $username->addValidator('alnum', false)
            ->addValidator('stringLength', false, array(3))
            ->setRequired(true)
            ->addFilter('StringToLower')
            ->setLabel('Name');

        $login = $this->createElement('text', 'login');
        $login->addValidator('alnum')
            ->addValidator('stringLength', false, array(3))
            ->setRequired(true)
            ->addFilter('StringToLower')
            ->setLabel('Login');

        $password = $this->createElement('password', 'password');
        $password->addValidator('StringLength', true, array(6))
            ->addValidator('regex', false,
                                    array(
                                         'pattern'=>'/^[a-z]+[0-9]+|^[0-9]+[a-z]+/',
                                         'messages' => array(
                                         'regexNotMatch'=>'Password should contain letters and numbers'
                                          )
                                    )
            )
            ->setRequired(true)
            ->setLabel('Password');

        $this->addElement($username)
            ->addElement($login)
            ->addElement($password)
            ->addElement('submit', 'register', array('label' => 'Registration'));
    }



}

