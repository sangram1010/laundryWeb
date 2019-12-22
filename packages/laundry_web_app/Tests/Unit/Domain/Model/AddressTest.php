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
class AddressTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Address
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Address();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );
    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet()
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'street',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getAddressid()
        );
    }

    /**
     * @test
     */
    public function setAddressidForIntSetsAddressid()
    {
        $this->subject->setAddressid(12);

        self::assertAttributeEquals(
            12,
            'addressid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHousenoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getHouseno()
        );
    }

    /**
     * @test
     */
    public function setHousenoForStringSetsHouseno()
    {
        $this->subject->setHouseno('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'houseno',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPincodeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPincode()
        );
    }

    /**
     * @test
     */
    public function setPincodeForIntSetsPincode()
    {
        $this->subject->setPincode(12);

        self::assertAttributeEquals(
            12,
            'pincode',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getStateReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getState()
        );
    }

    /**
     * @test
     */
    public function setStateForStringSetsState()
    {
        $this->subject->setState('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'state',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForStringSetsCountry()
    {
        $this->subject->setCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'country',
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

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }
}
