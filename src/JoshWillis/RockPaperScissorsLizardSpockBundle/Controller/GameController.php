<?php

namespace JoshWillis\RockPaperScissorsLizardSpockBundle\Controller;

use JoshWillis\RockPaperScissorsLizardSpockBundle\Characters\Spock;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class GameController extends Controller
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('JoshWillisRockPaperScissorsLizardSpockBundle:Game:index.html.twig');
    }


    /**
     * @Route("/resolve")
     * @Method({"POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resolveGameAction(Request $request)
    {

        return $this->render('JoshWillisRockPaperScissorsLizardSpockBundle:Game:resolve.html.twig');
    }
}
