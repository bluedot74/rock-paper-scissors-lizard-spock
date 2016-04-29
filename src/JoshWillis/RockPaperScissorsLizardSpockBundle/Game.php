<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Actions\Action;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Character;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Lizard;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Paper;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Rock;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Scissors;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Spock;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Draw;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Lose;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Win;

/**
 * Class Game
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle
 * The game class takes two players and pits their characters against each other then returns an Outcome object.
 * If a second player is not passed it is automatically generated and the character randomly chosen.
 *
 */
class Game
{
    /**
     * @var Player
     */
    private $player;

    /**
     * @var Character[]
     */
    public static $available_characters = [
        Lizard::class,
        Paper::class,
        Rock::class,
        Spock::class,
        Scissors::class
    ];

    /**
     * @var string
     */
    private $computer_name = "Computer";

    /**
     * @var Player
     */
    private $computer;

    /**
     * Game constructor.
     * @param Player $player
     * @param Player $computer
     */
    public function __construct(Player $player, Player $computer = null)
    {
        $this->player = $player;
        $this->computer = $computer;
    }


    /**
     * @return Draw|Lose|Win
     */
    public function getOutcome(){

        $computer = $this->getComputerPlayer();

        if($hits = $this->fight($this->player,$computer)){
            // The player has hits against the computer. Return a Win.
            return new Win($this->getHitDescription($this->player,$computer,$hits));
        }

        if($hits = $this->fight($computer, $this->player)){
            // The computer has hits against the player. Return a Lose
            return new Lose($this->getHitDescription($computer,$this->player,$hits));
        }

        // Neither player has hits against the other, return a Draw
        return new Draw($this->getHitDescription($computer,$this->player));


    }

    /**
     * @param Player $winner
     * @param Player $loser
     * @param Action[] $hits
     * @return string
     * Creates and returns a string describing the outcome of the game.
     */
    public function getHitDescription(Player $winner, Player $loser, $hits = null){

        if($hits) {
            // Assume only one hit.
            $hit = array_shift($hits);

            /** @var Action $action */
            $action = new $hit;

            return $winner->name . '\'s ' . $winner->character->getName() . " " . $action->getVerb() . " " . $loser->name . '\'s ' . $loser->character->getName();
        }

        return $winner->name . '\'s ' . $winner->character->getName() . " and " . $loser->name . '\'s ' . $loser->character->getName(). " flailed widely at each other, but it wasn't very effective.";

    }

    /**
     * @param Player $player
     * @param Player $opponent
     * @return Action[]
     * Returns an array of intersecting abilities to weaknesses of two players
     */
    public function fight(Player $player, Player $opponent){
        return array_intersect($player->character->getActions(),$opponent->character->getWeaknesses());
    }

    /**
     * @return Player
     * Returns the Computer Player. If one was passed into the constructor return it, otherwise generate a random one.
     */
    public function getComputerPlayer(){

        if($this->computer)
            return $this->computer;

        $character = $this->getRandomCharacter();

        $this->computer = new Player($character,$this->computer_name);;

        return $this->computer;

    }

    /**
     * @return Character
     * Grabs, instantiates and returns a random Character object.
     */
    private function getRandomCharacter(){

        $random_key = array_rand(Game::$available_characters);

        $character_class = Game::$available_characters[$random_key];

        return new $character_class;
    }

    /**
     * @return Character[]
     */
    public static function getAvailableCharacters(){

        $characters = [];

        foreach(Game::$available_characters as $available_character){
            $characters[] = new $available_character;
        }

        return $characters;
    }


}