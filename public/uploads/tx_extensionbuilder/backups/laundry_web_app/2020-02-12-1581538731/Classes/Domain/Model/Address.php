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
 * Address
 */
class Address extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * addressid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $addressid = 0;

    /**
     * houseno
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $houseno = '';

    /**
     * street
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $street = '';

    /**
     * pincode
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $pincode = 0;

    /**
     * state
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $state = '';

    /**
     * country
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $country = '';

    /**
     * contactno
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $contactno = 0;

    /**
     * email
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $email = '';

    /**
     * Returns the addressid
     * 
     * @return int $addressid
     */
    public function getAddressid()
    {
        return $this->addressid;
    }

    /**
     * Sets the addressid
     * 
     * @param int $addressid
     * @return void
     */
    public function setAddressid($addressid)
    {
        $this->addressid = $addressid;
    }

    /**
     * Returns the houseno
     * 
     * @return string $houseno
     */
    public function getHouseno()
    {
        return $this->houseno;
    }

    /**
     * Sets the houseno
     * 
     * @param string $houseno
     * @return void
     */
    public function setHouseno($houseno)
    {
        $this->houseno = $houseno;
    }

    /**
     * Returns the street
     * 
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     * 
     * @param string $street
     * @return void
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Returns the pincode
     * 
     * @return int $pincode
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     * Sets the pincode
     * 
     * @param int $pincode
     * @return void
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    }

    /**
     * Returns the state
     * 
     * @return string $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the state
     * 
     * @param string $state
     * @return void
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Returns the country
     * 
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     * 
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
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

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
