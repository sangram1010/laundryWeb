<?php
namespace LaunderyWebCleaners\LaundryWebApp\Controller;


use LaunderyWebCleaners\LaundryWebApp\Domain\Repository\ProductRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

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
 * Class DashboardController
 * @package LaunderyWebCleaners\LaundryWebApp\Controller
 */
class DashboardController extends ActionController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @param ProductRepository $productRepository
     */
    public function injectProductRepository(ProductRepository $productRepository){

        $this->productRepository= $productRepository;
    }

    /**
     *
     */
    public function overviewAction(){

        $products = $this->productRepository->findRecent(3);
        $products1 = $this->productRepository->findTrending(3);

        $this->view->assign('products',$products);
        $this->view->assign('products1', $products1);
    }
}
