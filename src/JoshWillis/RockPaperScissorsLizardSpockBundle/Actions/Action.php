<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Actions;


/**
 * Class Action
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Actions
 * Each action contains the verb that can describe it.
 */
abstract class Action {

    /**
     * @return string
     */
    abstract function getVerb();

}