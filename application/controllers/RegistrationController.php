<?php

class RegistrationController extends Zend_Controller_Action
{



    public function init()
    {

    }

    public function indexAction()
    {
        session_start();
        $form = new Application_Form_Register();

        if ($this->getRequest()->isPost()) {

            if (!$form->isValid($this->getRequest()->getPost())) {
                $this->view->form = $form;
            } else {
                $_SESSION['name'] = $this->getParam('username');
                header('Location: http://hellozend.dev');
            }

        } else {
            $this->view->form = $form;
        }
    }
}

