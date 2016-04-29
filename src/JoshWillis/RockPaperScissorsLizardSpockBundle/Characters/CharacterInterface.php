<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Characters;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Action;

/**
 * Interface CharacterInterface
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Characters
 */
interface CharacterInterface {

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return Action[]
     */
    public function getActions();

    /**
     * @return Action[]
     */
    public function getWeaknesses();


}