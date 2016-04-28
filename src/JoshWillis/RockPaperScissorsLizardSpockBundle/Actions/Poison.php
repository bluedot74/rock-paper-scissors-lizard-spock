<?php namespace JoshWillis\RockPaperScissorsBundle\Actions;

/**
 * Class Poison
 * @package JoshWillis\RockPaperScissorsBundle\Actions
 */
class Poison extends Action
{

    /**
     * @return string
     */
    public function getVerb()
    {
        return "poisons";
    }

}