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
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * recipeRepository
     * 
     * @var \SNSVLP\CocktailSnSvLp\Domain\Repository\RecipeRepository
     * @inject
     */
    protected $recipeRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $recipes = $this->recipeRepository->findAll();
        $this->view->assign('recipes', $recipes);
    }

    /**
     * action show
     * 
     * @param \SNSVLP\CocktailSnSvLp\Domain\Model\Recipe $recipe
     * @return void
     */
    public function showAction(\SNSVLP\CocktailSnSvLp\Domain\Model\Recipe $recipe)
    {
        $this->view->assign('recipe', $recipe);
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
