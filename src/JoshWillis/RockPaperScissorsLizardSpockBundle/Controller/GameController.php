<?php

namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Controller;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Character;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Game;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Player;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class GameController extends Controller
{

    /**
     * @Route("/", name="game")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $characters = Game::getAvailableCharacters();

        $em = $this->getDoctrine()->getManager();
        $gameRepository = $em->getRepository('JoshWillisRockPaperScissorsLizardSpockBundle:Game');

        $outcome = null;
        if($request->getMethod() == "POST") {

            // Generate the Character class from the name
            $player_character = Character::getCharacterByName($request->request->get('character'));

            // Create the Player class
            $player = new Player($player_character, 'Player');

            // Initialize the game
            $game = new Game($player);

            // Resolve the game and grab the Outcome
            $outcome = $game->getOutcome();

            $gameRepository->saveGameOutcome($player, $game->getComputerPlayer(), $outcome);


        }

        $statistics = $gameRepository->getStatistics();


        return $this->render('JoshWillisRockPaperScissorsLizardSpockBundle:Game:index.html.twig',array(
            'characters' => $characters,
            'outcome' => $outcome,
            'statistics' => $statistics
        ));
    }




}
