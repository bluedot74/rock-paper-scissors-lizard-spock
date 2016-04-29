<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Characters;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Action;


/**
 * Class Character
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Characters
 * Each character contains an array of Actions they perform ($actions) and Actions they are weak to ($weaknesses)
 */
abstract class Character {

    /**
     * @param $name
     * @return Character
     * Takes the name of a character and returns the character Object
     */
    public static function getCharacterByName($name){
        $character_class = "JoshWillis\\RockPaperScissorsLizardSpockBundle\\Characters\\".$name;

        return new $character_class;

    }

    /**
     * @return string
     */
    public function getName()
    {
        // Overwrite this in a character class to change the name to something other than the class name
        return (new \ReflectionClass($this))->getShortName();
    }

    /**
     * @return Action[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return Action[]
     */
    public function getWeaknesses()
    {
        return $this->weaknesses;
    }

}