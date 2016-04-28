<?php namespace JoshWillis\RockPaperScissorsBundle\Actions;

/**
 * Class Cut
 * @package JoshWillis\RockPaperScissorsBundle\Actions
 */
class Cut extends Action
{

    /**
     * @return string
     */
    public function getVerb()
    {
        return "cuts";
    }

}