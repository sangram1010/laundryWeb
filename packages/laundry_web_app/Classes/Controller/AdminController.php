<?php
namespace LaunderyWebCleaners\LaundryWebApp\Controller;

use LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer;
use LaunderyWebCleaners\LaundryWebApp\Domain\Model\Order;
use LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product;
use LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderRepository;
use OliverHader\SessionService\InvalidSessionException;
use OliverHader\SessionService\SubjectResolver;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Mvc\Exception\StopActionException;
use TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException;
use LaunderyWebCleaners\LaundryWebApp\Controller\OrderController;
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
 * OrderController
 */
class AdminController extends ActionController
{
    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * @param OrderRepository $orderRepository
     */
    public function injectOrderRepository(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }
    /**
     * @param Product $product
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function showAction()
    {
        try{
            $customer = SubjectResolver::get()
                ->forClassName(Customer::class)
                ->forPropertyName('user')
                ->resolve();
        } catch (InvalidSessionException $exception)
        {
            $customer=null;
        }

        $OrderController = new OrderController();
        $order =$OrderController->providOrder();

        $this->view->assign('customer',$customer);
        $this->view->assign('order', $order);
    }

    /**
     * @param Product $product
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\IllegalObjectTypeException
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\UnknownObjectException
     */
    public function acceptAction(Product $product)
    {
        $this->redirect('show');
    }
    /**
     * @param Product $product
     * @throws StopActionException
     * @throws UnsupportedRequestTypeException
     */
    public function completeAction(Product $product)
    {
        $OrderController = new OrderController();
        $order =$OrderController->providOrder();
        $order->
        $this->orderRepository->update($order);
        $this->redirect('show');
    }
}
