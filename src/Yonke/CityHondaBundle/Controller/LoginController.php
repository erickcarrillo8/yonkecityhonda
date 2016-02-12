<?php

namespace Yonke\CityHondaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Yonke\CityHondaBundle\Entity\Usuarios;
use Symfony\Component\HttpFoundation\Request;



class LoginController extends Controller
{ 

    public function indexAction() 
    {  
       
     
       return $this->render('YonkeCityHondaBundle:Login:index.html.twig');
      

    }   

      /**
      * @Route("/login" , name ="login")
      */

      public function loginAction(Request $request) 
    {    
         
       if ($request->getMethod() == "POST")
       {
          $correo = $request->get("correo");
          $password = $request->get("password");
         // echo "correo = ".$correo."</br> contraseña=".$password;exit;

          $user = $this->getDoctrine()->getRepository('YonkeCityHondaBundle:Usuarios')->findOneBy(array("correo"=>$correo,"password"=>$password));

          if ($user)
          {
             $session =  $request->getSession();
             $session->set("id",$user->getId());
             $session->set("nombre", $user->getNombre());

             return $this->redirect($this->generateUrl('verautos'));
          }
          else
          {
              $this->get('session')->getFlashBag()->add(
                  'mensaje',
                  'Los datos ingresados no son validos'
                );
              return $this->redirect($this->generateUrl('login'));
          }
          
       }


   
       return $this->render('YonkeCityHondaBundle:Login:index.html.twig');
      

    } 


     /**
      * @Route("/logout" , name ="logout")
      */

      public function logoutAction(Request $request) 
    {
        $session=$request->getSession();
        $session->clear();

        $this->get('session')->getFlashBag()->add(
                  'mensaje',
                  'Se ha cerrado la sesión.'
                );
              return $this->redirect($this->generateUrl('login'));
    }


    


}
