<?php
namespace LaunderyWebCleaners\LaundryWebApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Sangram Bhavar <sangram.bhavar@hof-university.de>
 * @author Rajveer Sahney <rajveer.sahney@hof-university.de>
 * @author Danish Umair Ahmad <danish.umair.ahmad@hof-university.de>
 * @author Sukanta Maity <sukanta.maity@hof-university.de>
 */
class OrderTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Order
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Order();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getOrderidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getOrderid()
        );
    }

    /**
     * @test
     */
    public function setOrderidForIntSetsOrderid()
    {
        $this->subject->setOrderid(12);

        self::assertAttributeEquals(
            12,
            'orderid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustomeridReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCustomerid()
        );
    }

    /**
     * @test
     */
    public function setCustomeridForIntSetsCustomerid()
    {
        $this->subject->setCustomerid(12);

        self::assertAttributeEquals(
            12,
            'customerid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTotalpriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getTotalprice()
        );
    }

    /**
     * @test
     */
    public function setTotalpriceForFloatSetsTotalprice()
    {
        $this->subject->setTotalprice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'totalprice',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getDatecreatedReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatecreated()
        );
    }

    /**
     * @test
     */
    public function setDatecreatedForDateTimeSetsDatecreated()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatecreated($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datecreated',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDeliveryPidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDeliveryPid()
        );
    }

    /**
     * @test
     */
    public function setDeliveryPidForIntSetsDeliveryPid()
    {
        $this->subject->setDeliveryPid(12);

        self::assertAttributeEquals(
            12,
            'deliveryPid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getStatusid()
        );
    }

    /**
     * @test
     */
    public function setStatusidForIntSetsStatusid()
    {
        $this->subject->setStatusid(12);

        self::assertAttributeEquals(
            12,
            'statusid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCustomerReturnsInitialValueForCustomer()
    {
        self::assertEquals(
            null,
            $this->subject->getCustomer()
        );
    }

    /**
     * @test
     */
    public function setCustomerForCustomerSetsCustomer()
    {
        $customerFixture = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer();
        $this->subject->setCustomer($customerFixture);

        self::assertAttributeEquals(
            $customerFixture,
            'customer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForStatus()
    {
        self::assertEquals(
            null,
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForStatusSetsStatus()
    {
        $statusFixture = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Status();
        $this->subject->setStatus($statusFixture);

        self::assertAttributeEquals(
            $statusFixture,
            'status',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDeliveryPersonReturnsInitialValueForDeliveryPerson()
    {
        self::assertEquals(
            null,
            $this->subject->getDeliveryPerson()
        );
    }

    /**
     * @test
     */
    public function setDeliveryPersonForDeliveryPersonSetsDeliveryPerson()
    {
        $deliveryPersonFixture = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson();
        $this->subject->setDeliveryPerson($deliveryPersonFixture);

        self::assertAttributeEquals(
            $deliveryPersonFixture,
            'deliveryPerson',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProductsReturnsInitialValueForProduct()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProducts()
        );
    }

    /**
     * @test
     */
    public function setProductsForObjectStorageContainingProductSetsProducts()
    {
        $product = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product();
        $objectStorageHoldingExactlyOneProducts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProducts->attach($product);
        $this->subject->setProducts($objectStorageHoldingExactlyOneProducts);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneProducts,
            'products',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addProductToObjectStorageHoldingProducts()
    {
        $product = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product();
        $productsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $productsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($product));
        $this->inject($this->subject, 'products', $productsObjectStorageMock);

        $this->subject->addProduct($product);
    }

    /**
     * @test
     */
    public function removeProductFromObjectStorageHoldingProducts()
    {
        $product = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product();
        $productsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $productsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($product));
        $this->inject($this->subject, 'products', $productsObjectStorageMock);

        $this->subject->removeProduct($product);
    }
}
