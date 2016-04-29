<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes;

/**
 * Class Lose
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes
 * This outcome occurs when the player and the computer select the same character
 */
class Draw extends Outcome
{

    function getOutcomeName()
    {
        return "Draw";
    }
}