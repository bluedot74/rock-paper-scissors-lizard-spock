<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes;

/**
 * Class Lose
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes
 * This outcome occurs when the player loses to the computer.
 */
class Lose extends Outcome
{

    function getOutcomeName()
    {
        return "Lose";
    }
}