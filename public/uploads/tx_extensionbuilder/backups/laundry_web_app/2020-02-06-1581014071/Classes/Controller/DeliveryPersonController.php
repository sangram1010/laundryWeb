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
 * DeliveryPersonController
 */
class DeliveryPersonController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * deliveryPersonRepository
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\DeliveryPersonRepository
     */
    protected $deliveryPersonRepository = null;

    /**
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\DeliveryPersonRepository $deliveryPersonRepository
     */
    public function injectDeliveryPersonRepository(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\DeliveryPersonRepository $deliveryPersonRepository)
    {
        $this->deliveryPersonRepository = $deliveryPersonRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $deliveryPersons = $this->deliveryPersonRepository->findAll();
        $this->view->assign('deliveryPersons', $deliveryPersons);
    }

    /**
     * action show
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson
     * @return void
     */
    public function showAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson)
    {
        $this->view->assign('deliveryPerson', $deliveryPerson);
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
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $newDeliveryPerson
     * @return void
     */
    public function createAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $newDeliveryPerson)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->deliveryPersonRepository->add($newDeliveryPerson);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson
     * @ignorevalidation $deliveryPerson
     * @return void
     */
    public function editAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson)
    {
        $this->view->assign('deliveryPerson', $deliveryPerson);
    }

    /**
     * action update
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson
     * @return void
     */
    public function updateAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->deliveryPersonRepository->update($deliveryPerson);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson
     * @return void
     */
    public function deleteAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->deliveryPersonRepository->remove($deliveryPerson);
        $this->redirect('list');
    }
}
