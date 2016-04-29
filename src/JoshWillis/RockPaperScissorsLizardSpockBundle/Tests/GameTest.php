<?php
namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Tests;


use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Scissors;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Spock;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Game;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Win;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Player;

class GameTest extends \PHPUnit_Framework_TestCase
{
    public function testSpockBeatsScissors()
    {
        $test = new Scissors();
        $game = new Game(
            new Player(new Spock, 'Player'),
            new Player(new Scissors, 'Computer')
        );
        $outcome = $game->getOutcome();

        $this->assertInstanceOf(Win::class,$outcome);
    }

    public function testSpockBeatsRock()
    {

    }

    public function testScissorsBeatsPaper()
    {

    }

    public function testScissorsBeatsLizard()
    {

    }

    public function testPaperBeatsRock()
    {

    }

    public function testPaperBeatsSpock()
    {

    }

    public function testRockBeatsLizard()
    {

    }

    public function testRockBeatsScissors()
    {

    }

    public function testLizardBeatsSpock()
    {

    }

    public function testLizardBeatsPaper()
    {

    }

}