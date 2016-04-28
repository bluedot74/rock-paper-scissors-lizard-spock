<?php

namespace RockPaperScissorsLizardSpockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('RockPaperScissorsLizardSpockBundle:Game:index.html.twig');
    }


    /**
     * @Route("/resolve")
     * @Method({"POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resolveGameAction(Request $request)
    {

        return $this->render('RockPaperScissorsLizardSpockBundle:Game:resolve.html.twig');
    }
}
