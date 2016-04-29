<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Actions;


/**
 * Class Action
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Actions
 * The Action classes describe the possible actions for each Character.
 * Each action contains the verb that can describe it.
 */
abstract class Action {

    /**
     * @return string
     */
    abstract public function getVerb();

}