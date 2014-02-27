<?php

class IndexController extends Zend_Controller_Action
{


    public function init()
    {

    }
    public function indexAction()
    {
        session_start();
        if (!empty($_SESSION['name'])) {
            $greetings = 'Thank you for registration <b>' .$_SESSION['name']. '</b> on the "HelloZend" website </p>';
            $this->view->display = $greetings;
            $_SESSION['name'] = null;
        } else {
            $this->view->display = new Application_Form_Login();
        }
    }

    public function loginAction()
    {
              session_start();
              $_SESSION['name'] = $this->getParam('username');
              return $this->_helper->redirector('index');
    }
}

