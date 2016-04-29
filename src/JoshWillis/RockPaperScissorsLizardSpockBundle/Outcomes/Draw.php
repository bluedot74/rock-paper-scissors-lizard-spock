<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes;

/**
 * Class Lose
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes
 * This outcome occurs when the player loses to the computer.
 */
class Draw extends Outcome
{

    function getOutcomeName()
    {
        return "Draw";
    }
}