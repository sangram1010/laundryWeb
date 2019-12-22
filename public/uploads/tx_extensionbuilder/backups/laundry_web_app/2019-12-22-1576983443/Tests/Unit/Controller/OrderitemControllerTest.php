<?php
namespace LaunderyWebCleaners\LaundryWebApp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Sangram Bhavar <sangram.bhavar@hof-university.de>
 * @author Rajveer Sahney <rajveer.sahney@hof-university.de>
 * @author Danish Umair Ahmad <danish.umair.ahmad@hof-university.de>
 * @author Sukanta Maity <sukanta.maity@hof-university.de>
 */
class OrderitemControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Controller\OrderitemController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Controller\OrderitemController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllOrderitemsFromRepositoryAndAssignsThemToView()
    {

        $allOrderitems = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $orderitemRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderitemRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $orderitemRepository->expects(self::once())->method('findAll')->will(self::returnValue($allOrderitems));
        $this->inject($this->subject, 'orderitemRepository', $orderitemRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('orderitems', $allOrderitems);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenOrderitemToView()
    {
        $orderitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('orderitem', $orderitem);

        $this->subject->showAction($orderitem);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenOrderitemToOrderitemRepository()
    {
        $orderitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();

        $orderitemRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderitemRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderitemRepository->expects(self::once())->method('add')->with($orderitem);
        $this->inject($this->subject, 'orderitemRepository', $orderitemRepository);

        $this->subject->createAction($orderitem);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenOrderitemToView()
    {
        $orderitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('orderitem', $orderitem);

        $this->subject->editAction($orderitem);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenOrderitemInOrderitemRepository()
    {
        $orderitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();

        $orderitemRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderitemRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderitemRepository->expects(self::once())->method('update')->with($orderitem);
        $this->inject($this->subject, 'orderitemRepository', $orderitemRepository);

        $this->subject->updateAction($orderitem);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenOrderitemFromOrderitemRepository()
    {
        $orderitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();

        $orderitemRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\OrderitemRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $orderitemRepository->expects(self::once())->method('remove')->with($orderitem);
        $this->inject($this->subject, 'orderitemRepository', $orderitemRepository);

        $this->subject->deleteAction($orderitem);
    }
}
