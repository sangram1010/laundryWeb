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
 * DeliveryPerson
 */
class DeliveryPerson extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * deliveryPid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $deliveryPid = 0;

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * contactno
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $contactno = 0;

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
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the contactno
     * 
     * @return int $contactno
     */
    public function getContactno()
    {
        return $this->contactno;
    }

    /**
     * Sets the contactno
     * 
     * @param int $contactno
     * @return void
     */
    public function setContactno($contactno)
    {
        $this->contactno = $contactno;
    }
}
