<?php namespace JoshWillis\RockPaperScissorsBundle\Actions;

/**
 * Class Cover
 * @package JoshWillis\RockPaperScissorsBundle\Actions
 */
class Cover extends Action
{

    /**
     * @return string
     */
    public function getVerb()
    {
        return "covers";
    }
}