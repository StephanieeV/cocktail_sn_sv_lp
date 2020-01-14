<?php
namespace SNSVLP\CocktailSnSvLp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Stéphanie Viéville <stephanie.vieville@etu.u-bordeaux.fr>
 * @author Sylvie Nguyen <sylvie.nguyen@etu.u-bordeaux.fr>
 * @author Lucie Perruchaud <lucie.perruchaud@etu.u-bordeaux.fr>
 */
class QuantityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SNSVLP\CocktailSnSvLp\Domain\Model\Quantity
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SNSVLP\CocktailSnSvLp\Domain\Model\Quantity();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getValue()
        );
    }

    /**
     * @test
     */
    public function setValueForFloatSetsValue()
    {
        $this->subject->setValue(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'value',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getUnityReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUnity()
        );
    }

    /**
     * @test
     */
    public function setUnityForIntSetsUnity()
    {
        $this->subject->setUnity(12);

        self::assertAttributeEquals(
            12,
            'unity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIngredientReturnsInitialValueForIngredient()
    {
        self::assertEquals(
            null,
            $this->subject->getIngredient()
        );
    }

    /**
     * @test
     */
    public function setIngredientForIngredientSetsIngredient()
    {
        $ingredientFixture = new \SNSVLP\CocktailSnSvLp\Domain\Model\Ingredient();
        $this->subject->setIngredient($ingredientFixture);

        self::assertAttributeEquals(
            $ingredientFixture,
            'ingredient',
            $this->subject
        );
    }
}
