<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Actions;

/**
 * Class Cut
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Actions
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