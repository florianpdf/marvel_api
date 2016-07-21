<?php

namespace MarvelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $characters = $this->container->get('marvel.api')->indexAction(2);

        return $this->render('MarvelBundle:Default:index.html.twig', array(
            'marvels' => $characters,
        ));
    }

    public function showMarvelAction(Request $request)
    {
        $characters = $this->container->get('marvel.api')->indexAction(1);

        return $this->render('MarvelBundle:Default:show.html.twig', array(
            'marvels' => $characters,
        ));
    }
}