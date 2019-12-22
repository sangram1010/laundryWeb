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
class StatusControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Controller\StatusController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Controller\StatusController::class)
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
    public function listActionFetchesAllStatusesFromRepositoryAndAssignsThemToView()
    {

        $allStatuses = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $statusRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\StatusRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $statusRepository->expects(self::once())->method('findAll')->will(self::returnValue($allStatuses));
        $this->inject($this->subject, 'statusRepository', $statusRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('statuses', $allStatuses);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenStatusToView()
    {
        $status = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('status', $status);

        $this->subject->showAction($status);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenStatusToStatusRepository()
    {
        $status = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status();

        $statusRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\StatusRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $statusRepository->expects(self::once())->method('add')->with($status);
        $this->inject($this->subject, 'statusRepository', $statusRepository);

        $this->subject->createAction($status);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenStatusToView()
    {
        $status = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('status', $status);

        $this->subject->editAction($status);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenStatusInStatusRepository()
    {
        $status = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status();

        $statusRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\StatusRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $statusRepository->expects(self::once())->method('update')->with($status);
        $this->inject($this->subject, 'statusRepository', $statusRepository);

        $this->subject->updateAction($status);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenStatusFromStatusRepository()
    {
        $status = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status();

        $statusRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\StatusRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $statusRepository->expects(self::once())->method('remove')->with($status);
        $this->inject($this->subject, 'statusRepository', $statusRepository);

        $this->subject->deleteAction($status);
    }
}
