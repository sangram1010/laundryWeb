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
class ProductTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Product();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getProductidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getProductid()
        );
    }

    /**
     * @test
     */
    public function setProductidForIntSetsProductid()
    {
        $this->subject->setProductid(12);

        self::assertAttributeEquals(
            12,
            'productid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProductnameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProductname()
        );
    }

    /**
     * @test
     */
    public function setProductnameForStringSetsProductname()
    {
        $this->subject->setProductname('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'productname',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getItemidReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getItemid()
        );
    }

    /**
     * @test
     */
    public function setItemidForIntSetsItemid()
    {
        $this->subject->setItemid(12);

        self::assertAttributeEquals(
            12,
            'itemid',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPricecolorReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPricecolor()
        );
    }

    /**
     * @test
     */
    public function setPricecolorForFloatSetsPricecolor()
    {
        $this->subject->setPricecolor(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'pricecolor',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getPricewhiteReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPricewhite()
        );
    }

    /**
     * @test
     */
    public function setPricewhiteForIntSetsPricewhite()
    {
        $this->subject->setPricewhite(12);

        self::assertAttributeEquals(
            12,
            'pricewhite',
            $this->subject
        );
    }
}
