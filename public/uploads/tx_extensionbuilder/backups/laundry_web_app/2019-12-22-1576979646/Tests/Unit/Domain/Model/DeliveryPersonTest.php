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
class DeliveryPersonTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\DeliveryPerson();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getContactnoReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getContactno()
        );
    }

    /**
     * @test
     */
    public function setContactnoForIntSetsContactno()
    {
        $this->subject->setContactno(12);

        self::assertAttributeEquals(
            12,
            'contactno',
            $this->subject
        );
    }
}
