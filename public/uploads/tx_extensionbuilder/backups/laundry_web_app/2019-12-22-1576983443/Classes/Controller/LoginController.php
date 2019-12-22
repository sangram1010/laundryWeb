<?php
namespace LaunderyWebCleaners\LaundryWebApp\Controller;


/***
 *
 * This file is part of the "LaundryWeb App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Sangram Bhavar <sangram.bhavar@hof-university.de>, LaundryWeb
 *           Rajveer Sahney <rajveer.sahney@hof-university.de>, LaundryWeb
 *           Danish Umair Ahmad <danish.umair.ahmad@hof-university.de>, LaundryWeb
 *           Sukanta Maity <sukanta.maity@hof-university.de>, LaundryWeb
 *
 ***/
/**
 * LoginController
 */
class LoginController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * loginRepository
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\LoginRepository
     */
    protected $loginRepository = null;

    /**
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\LoginRepository $loginRepository
     */
    public function injectLoginRepository(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $logins = $this->loginRepository->findAll();
        $this->view->assign('logins', $logins);
    }

    /**
     * action show
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login
     * @return void
     */
    public function showAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login)
    {
        $this->view->assign('login', $login);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $newLogin
     * @return void
     */
    public function createAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $newLogin)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->loginRepository->add($newLogin);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login
     * @ignorevalidation $login
     * @return void
     */
    public function editAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login)
    {
        $this->view->assign('login', $login);
    }

    /**
     * action update
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login
     * @return void
     */
    public function updateAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->loginRepository->update($login);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login
     * @return void
     */
    public function deleteAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->loginRepository->remove($login);
        $this->redirect('list');
    }
}
