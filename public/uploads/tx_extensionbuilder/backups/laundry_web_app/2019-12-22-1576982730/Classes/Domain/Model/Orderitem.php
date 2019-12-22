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
 * Orderitem
 */
class Orderitem extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * itemid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $itemid = 0;

    /**
     * orderid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $orderid = 0;

    /**
     * productid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $productid = 0;

    /**
     * color
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $color = '';

    /**
     * quantity
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $quantity = 0;

    /**
     * product
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product>
     */
    protected $product = null;

    /**
     * Returns the itemid
     * 
     * @return int $itemid
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Sets the itemid
     * 
     * @param int $itemid
     * @return void
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;
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
     * Returns the productid
     * 
     * @return int $productid
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Sets the productid
     * 
     * @param int $productid
     * @return void
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;
    }

    /**
     * Returns the color
     * 
     * @return string $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     * 
     * @param string $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Returns the quantity
     * 
     * @return int $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     * 
     * @param int $quantity
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

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
        $this->product = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Product
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product $product
     * @return void
     */
    public function addProduct(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product $product)
    {
        $this->product->attach($product);
    }

    /**
     * Removes a Product
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product $productToRemove The Product to be removed
     * @return void
     */
    public function removeProduct(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product $productToRemove)
    {
        $this->product->detach($productToRemove);
    }

    /**
     * Returns the product
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product> $product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets the product
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product> $product
     * @return void
     */
    public function setProduct(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $product)
    {
        $this->product = $product;
    }
}
