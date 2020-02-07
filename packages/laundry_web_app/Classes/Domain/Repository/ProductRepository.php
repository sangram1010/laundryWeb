<?php
namespace LaunderyWebCleaners\LaundryWebApp\Domain\Repository;


use LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product;
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
 * The repository for Products
 */
class ProductRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param string $search
     * @return array|QueryResultInterface|Product[]
     */
    public function  findBySearch(string $search)
    {
        $query= $this->createQuery();

        $constraints = [];
        $constraints[] = $query->like('productname','%'. $search .'%');
        $constraints[] = $query->like('productid','%'. $search .'%');
        $constraints[] = $query->like('pricecolor','%'. $search .'%');
        $constraints[] = $query->like('pricewhite','%'. $search .'%');

        $query->matching(
          $query->logicalOr(
              $constraints
          )
        );

        return $query->execute();
    }
}
