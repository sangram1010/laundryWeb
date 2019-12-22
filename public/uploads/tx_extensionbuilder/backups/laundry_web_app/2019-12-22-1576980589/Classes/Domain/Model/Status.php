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
 * Status
 */
class Status extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * statusid
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $statusid = 0;

    /**
     * status
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $status = '';

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
     * Returns the status
     * 
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     * 
     * @param string $status
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
