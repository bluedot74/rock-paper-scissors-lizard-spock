<?php namespace JoshWillis\RockPaperScissorsBundle\Actions;


/**
 * Class Action
 * @package JoshWillis\RockPaperScissorsBundle\Actions
 */
abstract class Action {

    /**
     * @return string
     */
    abstract function getVerb();

}