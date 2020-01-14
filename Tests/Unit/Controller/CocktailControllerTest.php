<?php
namespace SNSVLP\CocktailSnSvLp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Stéphanie Viéville <stephanie.vieville@etu.u-bordeaux.fr>
 * @author Sylvie Nguyen <sylvie.nguyen@etu.u-bordeaux.fr>
 * @author Lucie Perruchaud <lucie.perruchaud@etu.u-bordeaux.fr>
 */
class CocktailControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SNSVLP\CocktailSnSvLp\Controller\CocktailController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SNSVLP\CocktailSnSvLp\Controller\CocktailController::class)
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
    public function listActionFetchesAllCocktailsFromRepositoryAndAssignsThemToView()
    {

        $allCocktails = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $cocktailRepository = $this->getMockBuilder(\SNSVLP\CocktailSnSvLp\Domain\Repository\CocktailRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $cocktailRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCocktails));
        $this->inject($this->subject, 'cocktailRepository', $cocktailRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cocktails', $allCocktails);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCocktailToView()
    {
        $cocktail = new \SNSVLP\CocktailSnSvLp\Domain\Model\Cocktail();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('cocktail', $cocktail);

        $this->subject->showAction($cocktail);
    }
}
