<?php

namespace Yonke\CityHondaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Yonke\CityHondaBundle\Entity\Autos;
use Symfony\Component\HttpFoundation\JsonResponse;


class InventarioController extends Controller
{ 
	/**
     * @Route("/inventario/" , name ="inventario")
     * @Template("YonkeCityHondaBundle:Inventario:inventario.html.twig")
     */
    public function indexAction() 
    {  
       
     $repo = $this->getDoctrine()->getRepository('YonkeCityHondaBundle:Autos');
     $autos = $repo->findAll();
     
     return array('autos' => $autos);


       

    } 


     /**
     * @Route("/listarautos.json" , name ="listarautos")
     */
    public function listarAutos()
    {

       $repo = $this->getDoctrine()->getRepository('YonkeCityHondaBundle:Autos');
      // $autos = $repo->findAll();
      // return array('autos' => $autos);

       $autos = $repo->createQueryBuilder('q')->getQuery()->getArrayResult();

       return new JsonResponse(array('autos' => $autos));
    }

   

    


}
