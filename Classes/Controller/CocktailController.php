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
 * CocktailController
 */
class CocktailController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * cocktailRepository
     * 
     * @var \SNSVLP\CocktailSnSvLp\Domain\Repository\CocktailRepository
     * @inject
     */
    protected $cocktailRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $cocktails = $this->cocktailRepository->findAll();
        $this->view->assign('cocktails', $cocktails);
    }

    /**
     * action show
     * 
     * @param \SNSVLP\CocktailSnSvLp\Domain\Model\Cocktail $cocktail
     * @return void
     */
    public function showAction(\SNSVLP\CocktailSnSvLp\Domain\Model\Cocktail $cocktail)
    {
        $this->view->assign('cocktail', $cocktail);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }

    /**
     * action highlight
     * 
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action random
     * 
     * @return void
     */
    public function randomAction()
    {

    }
}
