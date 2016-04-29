<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Characters;


use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Cover;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Crush;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Vaporize;

class Rock extends Character {

    public $actions = array(
        Crush::class
    );

    public $weaknesses = array(
        Cover::class,
        Vaporize::class
    );

}