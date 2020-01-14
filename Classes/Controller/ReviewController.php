<?php
namespace SNSVLP\CocktailSnSvLp\Controller;

/***
 *
 * This file is part of the "Cocktail SNSVLP" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Stéphanie Viéville <stephanie.vieville@etu.u-bordeaux.fr>, Axolit
 *           Sylvie Nguyen <sylvie.nguyen@etu.u-bordeaux.fr>, Axolit
 *           Lucie Perruchaud <lucie.perruchaud@etu.u-bordeaux.fr>, Axolit
 *
 ***/

/**
 * ReviewController
 */
class ReviewController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     * 
     * @param \SNSVLP\CocktailSnSvLp\Domain\Model\Review $newReview
     * @return void
     */
    public function createAction(\SNSVLP\CocktailSnSvLp\Domain\Model\Review $newReview)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->reviewRepository->add($newReview);
        $this->redirect('list');
    }
}
