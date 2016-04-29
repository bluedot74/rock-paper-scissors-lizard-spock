<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Characters;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Crush;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Decapitate;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Eat;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Poison;

class Lizard extends Character {

    public $actions = array(
        Poison::class,
        Eat::class
    );

    public $weaknesses = array(
        Crush::class,
        Decapitate::class
    );

}