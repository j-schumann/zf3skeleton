<?php

/**
 * @copyright   (c) 2014-17, _ModuleName_
 * @license     http://customlicense CustomLicense
 * @author      Jakob Schumann <schumann@vrok.de>
 */

namespace _ModuleName_\Controller;

use Vrok\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Addition to the AppBase\Controller\AccountController
 */
class AccountController extends AbstractActionController
{
    /**
     * Account overview for the logged in User.
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        if (!$this->identity()) {
            return $this->redirect()->toRoute('account/login');
        }
    }
}
