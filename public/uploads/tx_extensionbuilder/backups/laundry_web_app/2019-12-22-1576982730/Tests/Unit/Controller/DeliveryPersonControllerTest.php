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
class DeliveryPersonControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Controller\DeliveryPersonController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Controller\DeliveryPersonController::class)
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
    public function listActionFetchesAllDeliveryPersonsFromRepositoryAndAssignsThemToView()
    {

        $allDeliveryPersons = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $deliveryPersonRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\DeliveryPersonRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $deliveryPersonRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDeliveryPersons));
        $this->inject($this->subject, 'deliveryPersonRepository', $deliveryPersonRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('deliveryPersons', $allDeliveryPersons);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenDeliveryPersonToView()
    {
        $deliveryPerson = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('deliveryPerson', $deliveryPerson);

        $this->subject->showAction($deliveryPerson);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenDeliveryPersonToDeliveryPersonRepository()
    {
        $deliveryPerson = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson();

        $deliveryPersonRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\DeliveryPersonRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $deliveryPersonRepository->expects(self::once())->method('add')->with($deliveryPerson);
        $this->inject($this->subject, 'deliveryPersonRepository', $deliveryPersonRepository);

        $this->subject->createAction($deliveryPerson);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenDeliveryPersonToView()
    {
        $deliveryPerson = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('deliveryPerson', $deliveryPerson);

        $this->subject->editAction($deliveryPerson);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenDeliveryPersonInDeliveryPersonRepository()
    {
        $deliveryPerson = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson();

        $deliveryPersonRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\DeliveryPersonRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $deliveryPersonRepository->expects(self::once())->method('update')->with($deliveryPerson);
        $this->inject($this->subject, 'deliveryPersonRepository', $deliveryPersonRepository);

        $this->subject->updateAction($deliveryPerson);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenDeliveryPersonFromDeliveryPersonRepository()
    {
        $deliveryPerson = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson();

        $deliveryPersonRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\DeliveryPersonRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $deliveryPersonRepository->expects(self::once())->method('remove')->with($deliveryPerson);
        $this->inject($this->subject, 'deliveryPersonRepository', $deliveryPersonRepository);

        $this->subject->deleteAction($deliveryPerson);
    }
}
