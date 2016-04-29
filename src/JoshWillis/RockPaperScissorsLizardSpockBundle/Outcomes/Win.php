<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes;

/**
 * Class Win
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes
 * This occurs when the player wins against the computer
 */
class Win extends Outcome
{

    function getOutcomeName()
    {
        Return "Win";
    }
}