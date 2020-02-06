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
    public function getClothNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getClothName()
        );
    }

    /**
     * @test
     */
    public function setClothNameForStringSetsClothName()
    {
        $this->subject->setClothName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'clothName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClothColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getClothColor()
        );
    }

    /**
     * @test
     */
    public function setClothColorForStringSetsClothColor()
    {
        $this->subject->setClothColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'clothColor',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClothQuantityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getClothQuantity()
        );
    }

    /**
     * @test
     */
    public function setClothQuantityForIntSetsClothQuantity()
    {
        $this->subject->setClothQuantity(12);

        self::assertAttributeEquals(
            12,
            'clothQuantity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClothPriceReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getClothPrice()
        );
    }

    /**
     * @test
     */
    public function setClothPriceForIntSetsClothPrice()
    {
        $this->subject->setClothPrice(12);

        self::assertAttributeEquals(
            12,
            'clothPrice',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOrdetitemsReturnsInitialValueForOrderitem()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getOrdetitems()
        );
    }

    /**
     * @test
     */
    public function setOrdetitemsForObjectStorageContainingOrderitemSetsOrdetitems()
    {
        $ordetitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();
        $objectStorageHoldingExactlyOneOrdetitems = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneOrdetitems->attach($ordetitem);
        $this->subject->setOrdetitems($objectStorageHoldingExactlyOneOrdetitems);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneOrdetitems,
            'ordetitems',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addOrdetitemToObjectStorageHoldingOrdetitems()
    {
        $ordetitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();
        $ordetitemsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ordetitemsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ordetitem));
        $this->inject($this->subject, 'ordetitems', $ordetitemsObjectStorageMock);

        $this->subject->addOrdetitem($ordetitem);
    }

    /**
     * @test
     */
    public function removeOrdetitemFromObjectStorageHoldingOrdetitems()
    {
        $ordetitem = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();
        $ordetitemsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ordetitemsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ordetitem));
        $this->inject($this->subject, 'ordetitems', $ordetitemsObjectStorageMock);

        $this->subject->removeOrdetitem($ordetitem);
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
}
