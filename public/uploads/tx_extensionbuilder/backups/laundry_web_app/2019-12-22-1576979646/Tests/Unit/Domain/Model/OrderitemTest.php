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
class OrderitemTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \LaunderyWebCleaners\LaundryWebApp\Domain\Model\Orderitem();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getColorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForStringSetsColor()
    {
        $this->subject->setColor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'color',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getQuantityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getQuantity()
        );
    }

    /**
     * @test
     */
    public function setQuantityForIntSetsQuantity()
    {
        $this->subject->setQuantity(12);

        self::assertAttributeEquals(
            12,
            'quantity',
            $this->subject
        );
    }
}
