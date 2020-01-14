<?php
namespace SNSVLP\CocktailSnSvLp\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Stéphanie Viéville <stephanie.vieville@etu.u-bordeaux.fr>
 * @author Sylvie Nguyen <sylvie.nguyen@etu.u-bordeaux.fr>
 * @author Lucie Perruchaud <lucie.perruchaud@etu.u-bordeaux.fr>
 */
class ReviewControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \SNSVLP\CocktailSnSvLp\Controller\ReviewController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\SNSVLP\CocktailSnSvLp\Controller\ReviewController::class)
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
    public function createActionAddsTheGivenReviewToReviewRepository()
    {
        $review = new \SNSVLP\CocktailSnSvLp\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->inject($this->subject, 'reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
