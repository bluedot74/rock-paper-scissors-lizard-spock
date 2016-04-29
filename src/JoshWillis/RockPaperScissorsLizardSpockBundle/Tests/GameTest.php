<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Tests;


use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Lizard;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Paper;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Rock;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Scissors;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Spock;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Game;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Draw;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Lose;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Win;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Player;

class GameTest extends \PHPUnit_Framework_TestCase
{
    public function testSpockBeatsScissors()
    {
        $game = new Game(
            new Player(new Spock, 'Player'),
            new Player(new Scissors, 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testSpockBeatsRock()
    {
        $game = new Game(
            new Player(new Spock, 'Player'),
            new Player(new Rock, 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testScissorsBeatsPaper()
    {
        $game = new Game(
            new Player(new Scissors(), 'Player'),
            new Player(new Paper(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testScissorsBeatsLizard()
    {
        $game = new Game(
            new Player(new Scissors, 'Player'),
            new Player(new Paper, 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testPaperBeatsRock()
    {
        $game = new Game(
            new Player(new Paper(), 'Player'),
            new Player(new Rock(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testPaperBeatsSpock()
    {
        $game = new Game(
            new Player(new Paper(), 'Player'),
            new Player(new Spock(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testRockBeatsLizard()
    {
        $game = new Game(
            new Player(new Rock(), 'Player'),
            new Player(new Lizard(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testRockBeatsScissors()
    {
        $game = new Game(
            new Player(new Rock(), 'Player'),
            new Player(new Scissors(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testLizardBeatsSpock()
    {
        $game = new Game(
            new Player(new Lizard(), 'Player'),
            new Player(new Spock(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testLizardBeatsPaper()
    {
        $game = new Game(
            new Player(new Lizard(), 'Player'),
            new Player(new Paper(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testSameCharactersResultInDraw(){
        $game = new Game(
            new Player(new Paper(), 'Player'),
            new Player(new Paper(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Draw::class,$outcome);

        $game = new Game(
            new Player(new Spock(), 'Player'),
            new Player(new Spock(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Draw::class,$outcome);
    }

    public function testLosingReturnsLoseOutcome(){
        $game = new Game(
            new Player(new Paper(), 'Player'),
            new Player(new Lizard(), 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Lose::class,$outcome);
    }



}