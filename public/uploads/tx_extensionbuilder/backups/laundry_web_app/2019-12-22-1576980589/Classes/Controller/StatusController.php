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
 * StatusController
 */
class StatusController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * statusRepository
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\StatusRepository
     */
    protected $statusRepository = null;

    /**
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\StatusRepository $statusRepository
     */
    public function injectStatusRepository(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $statuses = $this->statusRepository->findAll();
        $this->view->assign('statuses', $statuses);
    }

    /**
     * action show
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status
     * @return void
     */
    public function showAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status)
    {
        $this->view->assign('status', $status);
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
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $newStatus
     * @return void
     */
    public function createAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $newStatus)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->statusRepository->add($newStatus);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status
     * @ignorevalidation $status
     * @return void
     */
    public function editAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status)
    {
        $this->view->assign('status', $status);
    }

    /**
     * action update
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status
     * @return void
     */
    public function updateAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->statusRepository->update($status);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status
     * @return void
     */
    public function deleteAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->statusRepository->remove($status);
        $this->redirect('list');
    }
}
