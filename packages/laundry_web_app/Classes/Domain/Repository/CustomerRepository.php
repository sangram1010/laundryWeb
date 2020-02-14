<?php
namespace LaunderyWebCleaners\LaundryWebApp\Domain\Repository;


use LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer;
use TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;

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
 * Class CustomerRepository
 * @package LaunderyWebCleaners\LaundryWebApp\Domain\Repository
 */
class CustomerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @param string $search
     * @return array|QueryResultInterface|Customer[]
     * @throws InvalidQueryException
     */
    public function  findBySearch(string $search)
    {
        $query= $this->createQuery();

        $constraints = [];
        $constraints[] = $query->like('title','%'. $search .'%');
        $constraints[] = $query->like('firstname','%'. $search .'%');
        $constraints[] = $query->like('surname','%'. $search .'%');
        $constraints[] = $query->like('customerid','%'. $search .'%');

        $query->matching(
            $query->logicalOr(
                $constraints
            )
        );

        return $query->execute();
    }
}
