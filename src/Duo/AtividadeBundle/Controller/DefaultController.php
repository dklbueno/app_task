<?php

namespace Duo\AtividadeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/atividade")
     */
    public function indexAction()
    {
        return $this->render('AtividadeBundle:Default:index.html.twig');
    }
}
