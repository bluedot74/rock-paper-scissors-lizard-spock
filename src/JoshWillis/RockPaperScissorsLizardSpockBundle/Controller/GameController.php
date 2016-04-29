<?php

namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Controller;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Character;
use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Spock;
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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $characters = Game::getAvailableCharacters();

        return $this->render('JoshWillisRockPaperScissorsLizardSpockBundle:Game:index.html.twig',array('characters' => $characters));
    }


    /**
     * @Route("/resolve",name="game_resolve")
     * @Method({"POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resolveGameAction(Request $request)
    {
        $player_character = Character::getCharacterByName($request->request->get('character'));

        $player = new Player($player_character,'Player');

        $game = new Game($player);

        $outcome = $game->getOutcome();

        return $this->render('JoshWillisRockPaperScissorsLizardSpockBundle:Game:resolve.html.twig', array('outcome' => $outcome));
    }
}
