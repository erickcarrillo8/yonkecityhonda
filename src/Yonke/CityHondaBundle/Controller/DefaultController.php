<?php

namespace Yonke\CityHondaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template("YonkeCityHondaBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
       
       return $this->render('YonkeCityHondaBundle:Default:index.html.twig');
    }
}
