<?php

namespace Yonke\CityHondaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Yonke\CityHondaBundle\Entity\Autos;
use Yonke\CityHondaBundle\Form\AutosType;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Autos controller.
 *
 */
class AutosController extends Controller
{
    /**
     * @Route("/verautos" , name ="verautos")
     * @Template("YonkeCityHondaBundle:Inventario:inventario.html.twig")
     */
    public function indexAction(Request $request)
    {
        
        $session = $request->getSession();

        if ($session->has("id"))
        {   
              $em = $this->getDoctrine()->getManager();
              $autos = $em->getRepository('YonkeCityHondaBundle:Autos')->findAll();

                return $this->render('autos/index.html.twig', array(
                'autos' => $autos,
                 ));

        }
        else
        {
                return  $this->redirect($this->generateUrl("login"));
        }

       
    }

   /**
     * @Route("/nuevoauto" , name ="nuevoauto")
     * @Template("YonkeCityHondaBundle:Inventario:new.html.twig")
     */
    public function newAction(Request $request)
    {
        $auto = new Autos();
        $form = $this->createForm('Yonke\CityHondaBundle\Form\AutosType', $auto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($auto);
            $em->flush();

            return $this->redirectToRoute('mostrarauto/', array('id' => $autos->getId()));
        }

        return $this->render('autos/new.html.twig', array(
            'auto' => $auto,
            'form' => $form->createView(),
        ));
    }

  /**
     * @Route("/mostrarauto/{id}" , name ="mostrarauto")
     * @Template("YonkeCityHondaBundle:Inventario:new.html.twig")
     */
    public function showAction(Autos $auto)
    {
        $deleteForm = $this->createDeleteForm($auto);

        return $this->render('autos/show.html.twig', array(
            'auto' => $auto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/editarauto/{id}" , name ="editarauto")
     */
    public function editAction(Request $request, Autos $auto)
    {
        $deleteForm = $this->createDeleteForm($auto);
        $editForm = $this->createForm('Yonke\CityHondaBundle\Form\AutosType', $auto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($auto);
            $em->flush();

            return $this->redirectToRoute('editarauto', array('id' => $auto->getId()));
        }

        return $this->render('autos/edit.html.twig', array(
            'auto' => $auto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

   /**
     * @Route("/borrarauto" , name ="borrarauto")
     * @Template("YonkeCityHondaBundle:Inventario:new.html.twig")
     */
    public function deleteAction(Request $request, Autos $auto)
    {
        $form = $this->createDeleteForm($auto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($auto);
            $em->flush();
        }

        return $this->redirectToRoute('autos_index');
    }

    /**
     * Creates a form to delete a Autos entity.
     *
     * @param Autos $auto The Autos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Autos $auto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('borrarauto', array('id' => $auto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
