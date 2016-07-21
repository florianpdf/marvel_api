<?php

namespace MarvelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $characters = $this->container->get('marvel.api')->indexAction();

        return $this->render('MarvelBundle:Default:index.html.twig', array(
            'marvels' => $characters,
        ));
    }

    public function showMarvelAction()
    {
        $characters = $this->container->get('marvel.api')->showAction();

        return $this->render('MarvelBundle:Default:show.html.twig', array(
            'marvels' => $characters,
        ));
    }
}