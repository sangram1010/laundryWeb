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
 * OrderitemController
 */
class OrderitemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * orderitemRepository
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderitemRepository
     */
    protected $orderitemRepository = null;

    /**
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderitemRepository $orderitemRepository
     */
    public function injectOrderitemRepository(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderitemRepository $orderitemRepository)
    {
        $this->orderitemRepository = $orderitemRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $orderitems = $this->orderitemRepository->findAll();
        $this->view->assign('orderitems', $orderitems);
    }

    /**
     * action show
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem
     * @return void
     */
    public function showAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem)
    {
        $this->view->assign('orderitem', $orderitem);
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
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $newOrderitem
     * @return void
     */
    public function createAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $newOrderitem)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderitemRepository->add($newOrderitem);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem
     * @ignorevalidation $orderitem
     * @return void
     */
    public function editAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem)
    {
        $this->view->assign('orderitem', $orderitem);
    }

    /**
     * action update
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem
     * @return void
     */
    public function updateAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderitemRepository->update($orderitem);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem
     * @return void
     */
    public function deleteAction(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $orderitem)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->orderitemRepository->remove($orderitem);
        $this->redirect('list');
    }
}
