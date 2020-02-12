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
class CustomerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Customer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSurnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSurname()
        );
    }

    /**
     * @test
     */
    public function setSurnameForStringSetsSurname()
    {
        $this->subject->setSurname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'surname',
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
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstname()
        );
    }

    /**
     * @test
     */
    public function setFirstnameForStringSetsFirstname()
    {
        $this->subject->setFirstname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstname',
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
    public function getLoginReturnsInitialValueForLogin()
    {
        self::assertEquals(
            null,
            $this->subject->getLogin()
        );
    }

    /**
     * @test
     */
    public function setLoginForLoginSetsLogin()
    {
        $loginFixture = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Login();
        $this->subject->setLogin($loginFixture);

        self::assertAttributeEquals(
            $loginFixture,
            'login',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForAddress()
    {
        self::assertEquals(
            null,
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForAddressSetsAddress()
    {
        $addressFixture = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Address();
        $this->subject->setAddress($addressFixture);

        self::assertAttributeEquals(
            $addressFixture,
            'address',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueForFrontendUser()
    {
    }

    /**
     * @test
     */
    public function setUserForFrontendUserSetsUser()
    {
    }
}
