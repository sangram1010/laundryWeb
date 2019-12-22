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
class CustomerControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Controller\CustomerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Controller\CustomerController::class)
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
    public function listActionFetchesAllCustomersFromRepositoryAndAssignsThemToView()
    {

        $allCustomers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $customerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCustomers));
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('customers', $allCustomers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCustomerToView()
    {
        $customer = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('customer', $customer);

        $this->subject->showAction($customer);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCustomerToCustomerRepository()
    {
        $customer = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer();

        $customerRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository->expects(self::once())->method('add')->with($customer);
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $this->subject->createAction($customer);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCustomerToView()
    {
        $customer = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('customer', $customer);

        $this->subject->editAction($customer);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCustomerInCustomerRepository()
    {
        $customer = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer();

        $customerRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository->expects(self::once())->method('update')->with($customer);
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $this->subject->updateAction($customer);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCustomerFromCustomerRepository()
    {
        $customer = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer();

        $customerRepository = $this->getMockBuilder(\LaunderyWebCleaners\LaundryWebApp\Domain\Repository\CustomerRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $customerRepository->expects(self::once())->method('remove')->with($customer);
        $this->inject($this->subject, 'customerRepository', $customerRepository);

        $this->subject->deleteAction($customer);
    }
}
