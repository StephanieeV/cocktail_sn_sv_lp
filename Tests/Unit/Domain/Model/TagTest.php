<?php
namespace SNSVLP\CocktailSnSvLp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Stéphanie Viéville <stephanie.vieville@etu.u-bordeaux.fr>
 * @author Sylvie Nguyen <sylvie.nguyen@etu.u-bordeaux.fr>
 * @author Lucie Perruchaud <lucie.perruchaud@etu.u-bordeaux.fr>
 */
class TagTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SNSVLP\CocktailSnSvLp\Domain\Model\Tag
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SNSVLP\CocktailSnSvLp\Domain\Model\Tag();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
}
