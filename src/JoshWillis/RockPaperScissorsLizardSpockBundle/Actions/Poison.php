<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Actions;

/**
 * Class Poison
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Actions
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