<?php namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Characters;


use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Cover;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Cut;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Disprove;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Eat;

class Paper extends Character {

    public $actions = array(
        Cover::class,
        Disprove::class
    );

    public $weaknesses = array(
        Cut::class,
        Eat::class
    );
}