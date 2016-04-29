<?php

namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Repository;

use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Entity\Game;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Outcomes\Outcome;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Player;


/**
 * Class GameRepository
 * @package JoshWillis\RockPaperScissorsLizardSpockBundle\Repository
 */
class GameRepository extends \Doctrine\ORM\EntityRepository
{


    /**
     * @param Player $player
     * @param Player $computer
     * @param Outcome $outcome
     * Saves the outcome of a game to the database
     */
    public function saveGameOutcome(Player $player, Player $computer, Outcome $outcome)
    {
        $doctrine_game = new Game();

        $doctrine_game->setPlayerCharacter($player->character->getName());

        $doctrine_game->setComputerCharacter($computer->character->getName());

        $doctrine_game->setOutcome($outcome->getOutcomeName());

        $entity_manager = $this->getEntityManager();

        $entity_manager->persist($doctrine_game);

        $entity_manager->flush();
    }

    /**
     * @return array
     * Mostly a helper function, compiles an array of statistics.
     */
    public function getStatistics(){

        return array(
            'player_characters' => $this->getPlayerCharacterCounts(),
            'computer_characters' => $this->getComputerCharacterCounts(),
            'win_loss_counts' => $this->getWinLossCount()
        );

    }

    /**
     * @return array
     * Returns the number of times the player uses a each character
     */
    public function getPlayerCharacterCounts(){

        $sql = <<<SQL
    SELECT g.player_character,COUNT(g.player_character) as times_used
    FROM JoshWillisRockPaperScissorsLizardSpockBundle:Game as g
    GROUP BY g.player_character
    ORDER BY times_used DESC
SQL;

        return $this->runSimpleQuery($sql);
    }

    /**
     * @return array
     * Returns the number of times the computer uses a each character
     */
    public function getComputerCharacterCounts(){

        $sql = <<<SQL
    SELECT g.player_character,COUNT(g.computer_character) as times_used
    FROM JoshWillisRockPaperScissorsLizardSpockBundle:Game as g
    GROUP BY g.computer_character
    ORDER BY times_used DESC
SQL;


        return $this->runSimpleQuery($sql);
    }

    /**
     * @return array
     * Returns an array of the Win, Loss, and Draw counts.
     */
    public function getWinLossCount(){

        $sql = <<<SQL
    SELECT g.outcome,COUNT(g.computer_character) as win_loss_draw_count
    FROM JoshWillisRockPaperScissorsLizardSpockBundle:Game as g
    GROUP BY g.outcome
    ORDER BY win_loss_draw_count DESC
SQL;

        return $this->runSimpleQuery($sql);
    }

    /**
     * @param $sql
     * @return array
     * A simplified way to run simple queries.
     */
    private function runSimpleQuery($sql){

        $entity_manager = $this->getEntityManager();

        $query = $entity_manager->createQuery($sql);

        return $query->getArrayResult();
    }

}
