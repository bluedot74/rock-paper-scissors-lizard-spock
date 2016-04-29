<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Character;

/**
 * Class Player
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle
 * The player class stores an identifier for a player (name), and the player's selected Character.
 */
class Player
{

    /**
     * @var Character
     */
    public $character;

    /**
     * @var string
     */
    public $name;

    /**
     * Player constructor.
     * @param Character $character
     * @param $name
     */
    public function __construct(Character $character, $name)
    {
        $this->character = $character;
        $this->name = $name;
    }


}