<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Characters;


use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Disprove;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Poison;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Smash;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Vaporize;

class Spock extends Character {

    public $actions = array(
        Vaporize::class,
        Smash::class
    );

    public $weaknesses = array(
        Disprove::class,
        Poison::class
    );

}