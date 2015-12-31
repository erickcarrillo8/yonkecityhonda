<?php

namespace Yonke\CityHondaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


class NosotrosController extends Controller
{ 
	/**
     * @Route("/nosotros/" , name ="nosotros")
     * @Template("YonkeCityHondaBundle:Default:nosotros.html.twig")
     */
    public function indexAction() 
    {  
       
       return $this->render('YonkeCityHondaBundle:Default:nosotros.html.twig');
    }


}
