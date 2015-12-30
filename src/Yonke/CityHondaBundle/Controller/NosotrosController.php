<?php

namespace Yonke\CityHondaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


class NosotrosController extends Controller
{ 
	/**
     * @Route("/nosotros/")
     * @Template("YonkeCityHondaBundle:nosotros.html.twig")
     */
    public function indexAction()
    {
       
       return $this->render('YonkeCityHondaBundle:nosotros.html.twig');
    }
}
