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
 * Avis
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Note
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $rate = 0;

    /**
     * Commentaire
     * 
     * @var string
     */
    protected $comment = '';

    /**
     * Returns the rate
     * 
     * @return int $rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets the rate
     * 
     * @param int $rate
     * @return void
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * Returns the comment
     * 
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     * 
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
