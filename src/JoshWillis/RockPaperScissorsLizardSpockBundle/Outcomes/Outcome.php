<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Action;

/**
 * Class Outcome
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle
 */
abstract class Outcome
{

    /**
     * @var string
     * A description of the outcome
     */
    public $description;

    /**
     * Outcome constructor.
     * @param string $description
     */
    public function __construct($description = null)
    {
        $this->description = $description;
    }

    abstract function getOutcomeName();


}