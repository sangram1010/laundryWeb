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
 * Product
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * productname
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $productname = '';

    /**
     * productid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $productid = 0;

    /**
     * itemid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $itemid = 0;

    /**
     * pricecolor
     * 
     * @var float
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $pricecolor = 0.0;

    /**
     * pricewhite
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $pricewhite = 0;

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

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
     * Returns the pricecolor
     * 
     * @return float $pricecolor
     */
    public function getPricecolor()
    {
        return $this->pricecolor;
    }

    /**
     * Sets the pricecolor
     * 
     * @param float $pricecolor
     * @return void
     */
    public function setPricecolor($pricecolor)
    {
        $this->pricecolor = $pricecolor;
    }

    /**
     * Returns the pricewhite
     * 
     * @return int $pricewhite
     */
    public function getPricewhite()
    {
        return $this->pricewhite;
    }

    /**
     * Sets the pricewhite
     * 
     * @param int $pricewhite
     * @return void
     */
    public function setPricewhite($pricewhite)
    {
        $this->pricewhite = $pricewhite;
    }

    /**
     * Returns the productname
     * 
     * @return string $productname
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * Sets the productname
     * 
     * @param string $productname
     * @return void
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }
}
