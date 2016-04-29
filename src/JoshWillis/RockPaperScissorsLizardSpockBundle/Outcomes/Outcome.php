<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes;

/**
 * Class Outcome
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle
 * The Outcome classes describe each possible outcome and provide a standardized api for the frontend to display the results.
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