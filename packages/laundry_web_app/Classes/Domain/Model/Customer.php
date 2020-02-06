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
 * Customer
 */
class Customer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * surname
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $surname = '';

    /**
     * customerid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $customerid = 0;

    /**
     * title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * firstname
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $firstname = '';

    /**
     * addressid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $addressid = 0;

    /**
     * login
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login
     */
    protected $login = null;

    /**
     * address
     * 
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Address
     */
    protected $address = null;

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
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the firstname
     * 
     * @return string $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets the firstname
     * 
     * @param string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Returns the surname
     * 
     * @return string $surname
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets the surname
     * 
     * @param string $surname
     * @return void
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

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
     * Returns the login
     * 
     * @return \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets the login
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login
     * @return void
     */
    public function setLogin(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login $login)
    {
        $this->login = $login;
    }

    /**
     * Returns the address
     * 
     * @return \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Address $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Address $address
     * @return void
     */
    public function setAddress(\LaunderyWebCleaners\LaundryWebApp\Domain\Model\Address $address)
    {
        $this->address = $address;
    }
}
