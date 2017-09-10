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

    /**
     * Allows the user to make some general settings.
     *
     * @return ViewModel
     */
    public function settingsAction()
    {
        $meta = $this->getServiceLocator()->get(Meta::class);
        /* @var $meta Meta */

        /*$cc = $meta->getObjectValue($this->identity(), 'user.exampleSetting');

        $form = $this->getServiceLocator()->get('FormElementManager')
                ->get('Sambeso\Form\User\Settings');
        $form->setData(['exampleSetting' => $cc]);

        $viewModel = $this->createViewModel([
            'form' => $form,
        ]);

        if (!$this->request->isPost()) {
            return $viewModel;
        }

        $isValid = $form->setData($this->request->getPost())->isValid();
        if (!$isValid) {
            return $viewModel;
        }

        $data = $form->getData();
        $meta->setObjectValue($this->identity(), 'user.exampleSetting',
                $data['costCenter']);
        $meta->getEntityManager()->flush();

        $this->flashMessenger()
                ->addSuccessMessage('message.account.settings.edited');
         */

        return $this->redirect()->toRoute('account');
    }
}
