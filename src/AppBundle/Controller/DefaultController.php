<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }


    /**
     * @Route("/prueba", name="prueba")
     */
    public function prueba()
    {

        $datos = array(
            'personas' => array(

                array(

                    'nombre' => 'Juanito',
                    'edad' => 33

                ),

                array(
                    'nombre' => 'Juan',
                    'edad' => 22
                )
            )
        );


        return $this->render('default/prueba.html.twig', array(
            'datos' => $datos
        ));
    }

}
