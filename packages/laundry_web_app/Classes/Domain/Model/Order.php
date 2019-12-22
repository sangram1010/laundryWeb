<?php
namespace LaunderyWebCleaners\LaundryWebApp\Domain\Model;


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
 * Order
 */
class Order extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * orderid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $orderid = 0;

    /**
     * customerid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $customerid = 0;

    /**
     * totalprice
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $totalprice = 0.0;

    /**
     * datecreated
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $datecreated = null;

    /**
     * deliveryPid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $deliveryPid = 0;

    /**
     * statusid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $statusid = 0;

    /**
     * ordetitems
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem>
     */
    protected $ordetitems = null;

    /**
     * customer
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer
     */
    protected $customer = null;

    /**
     * status
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status
     */
    protected $status = null;

    /**
     * deliveryPerson
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson
     */
    protected $deliveryPerson = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->ordetitems = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the orderid
     * 
     * @return int $orderid
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Sets the orderid
     * 
     * @param int $orderid
     * @return void
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    }

    /**
     * Returns the customerid
     * 
     * @return int $customerid
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Sets the customerid
     * 
     * @param int $customerid
     * @return void
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;
    }

    /**
     * Returns the totalprice
     * 
     * @return float $totalprice
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }

    /**
     * Sets the totalprice
     * 
     * @param float $totalprice
     * @return void
     */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;
    }

    /**
     * Returns the datecreated
     * 
     * @return \DateTime $datecreated
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Sets the datecreated
     * 
     * @param \DateTime $datecreated
     * @return void
     */
    public function setDatecreated(\DateTime $datecreated)
    {
        $this->datecreated = $datecreated;
    }

    /**
     * Returns the deliveryPid
     * 
     * @return int $deliveryPid
     */
    public function getDeliveryPid()
    {
        return $this->deliveryPid;
    }

    /**
     * Sets the deliveryPid
     * 
     * @param int $deliveryPid
     * @return void
     */
    public function setDeliveryPid($deliveryPid)
    {
        $this->deliveryPid = $deliveryPid;
    }

    /**
     * Returns the statusid
     * 
     * @return int $statusid
     */
    public function getStatusid()
    {
        return $this->statusid;
    }

    /**
     * Sets the statusid
     * 
     * @param int $statusid
     * @return void
     */
    public function setStatusid($statusid)
    {
        $this->statusid = $statusid;
    }

    /**
     * Adds a Orderitem
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $ordetitem
     * @return void
     */
    public function addOrdetitem(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $ordetitem)
    {
        $this->ordetitems->attach($ordetitem);
    }

    /**
     * Removes a Orderitem
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $ordetitemToRemove The Orderitem to be removed
     * @return void
     */
    public function removeOrdetitem(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem $ordetitemToRemove)
    {
        $this->ordetitems->detach($ordetitemToRemove);
    }

    /**
     * Returns the ordetitems
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem> $ordetitems
     */
    public function getOrdetitems()
    {
        return $this->ordetitems;
    }

    /**
     * Sets the ordetitems
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem> $ordetitems
     * @return void
     */
    public function setOrdetitems(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ordetitems)
    {
        $this->ordetitems = $ordetitems;
    }

    /**
     * Returns the customer
     * 
     * @return \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer $customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets the customer
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer $customer
     * @return void
     */
    public function setCustomer(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Returns the status
     * 
     * @return \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status
     * @return void
     */
    public function setStatus(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status $status)
    {
        $this->status = $status;
    }

    /**
     * Returns the deliveryPerson
     * 
     * @return \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson
     */
    public function getDeliveryPerson()
    {
        return $this->deliveryPerson;
    }

    /**
     * Sets the deliveryPerson
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson
     * @return void
     */
    public function setDeliveryPerson(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson $deliveryPerson)
    {
        $this->deliveryPerson = $deliveryPerson;
    }
}
