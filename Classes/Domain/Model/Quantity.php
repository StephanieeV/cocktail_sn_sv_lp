<?php
namespace SNSVLP\CocktailSnSvLp\Domain\Model;

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
 * Quantité
 */
class Quantity extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Valeur
     * 
     * @var float
     * @validate NotEmpty
     */
    protected $value = 0.0;

    /**
     * Unité
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $unity = 0;

    /**
     * Ingrédient
     * 
     * @var \SNSVLP\CocktailSnSvLp\Domain\Model\Ingredient
     */
    protected $ingredient = null;

    /**
     * Returns the value
     * 
     * @return float $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     * 
     * @param float $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the unity
     * 
     * @return int $unity
     */
    public function getUnity()
    {
        return $this->unity;
    }

    /**
     * Sets the unity
     * 
     * @param int $unity
     * @return void
     */
    public function setUnity($unity)
    {
        $this->unity = $unity;
    }

    /**
     * Returns the ingredient
     * 
     * @return \SNSVLP\CocktailSnSvLp\Domain\Model\Ingredient $ingredient
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets the ingredient
     * 
     * @param \SNSVLP\CocktailSnSvLp\Domain\Model\Ingredient $ingredient
     * @return void
     */
    public function setIngredient(\SNSVLP\CocktailSnSvLp\Domain\Model\Ingredient $ingredient)
    {
        $this->ingredient = $ingredient;
    }
}
