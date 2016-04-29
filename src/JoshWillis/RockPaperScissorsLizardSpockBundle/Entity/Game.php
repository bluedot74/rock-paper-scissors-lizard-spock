<?php

namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="JoshWillis\RockPaperScissorsLizardSpockBundle\Repository\GameRepository")
 */
class Game
{
    /**
     * @return string
     */
    public function getPlayerCharacter()
    {
        return $this->player_character;
    }

    /**
     * @param string $player_character
     */
    public function setPlayerCharacter($player_character)
    {
        $this->player_character = $player_character;
    }

    /**
     * @return string
     */
    public function getComputerCharacter()
    {
        return $this->computer_character;
    }

    /**
     * @param string $computer_character
     */
    public function setComputerCharacter($computer_character)
    {
        $this->computer_character = $computer_character;
    }

    /**
     * @return string
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * @param string $outcome
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="player_character",type="string")
     */
    private $player_character;

    /**
     * @var string
     *
     * @ORM\Column(name="computer_character",type="string")
     */
    private $computer_character;


    /**
     * @var string
     *
     * @ORM\Column(name="outcome",type="string")
     */
    private $outcome;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

