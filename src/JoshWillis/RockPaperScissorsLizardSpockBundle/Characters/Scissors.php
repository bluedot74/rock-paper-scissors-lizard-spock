<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Characters;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Crush;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Cut;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Decapitate;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Smash;

class Scissors extends Character {

    public $actions = array(
        Decapitate::class,
        Cut::class
    );

    public $weaknesses = array(
        Crush::class,
        Smash::class
    );

}