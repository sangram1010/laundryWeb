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
 * Login
 */
class Login extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * email
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $email = '';

    /**
     * password
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $password = '';

    /**
     * type
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $type = '';

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

    /**
     * Returns the password
     * 
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the password
     * 
     * @param string $password
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Returns the type
     * 
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
