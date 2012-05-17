<?php

namespace Application\Controller;

use Zend\Mvc\Controller\ActionController,
    Zend\View\Model\ViewModel;

class IndexController extends ActionController
{
    public function indexAction()
    {
        $plugin = $this->zfcUserAuthentication();
        return new ViewModel();
    }
}
