<?php

namespace MarvelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $api_key = '8b4b11c43611e66fda1b504f8cae9d7e';
        $md5 = md5('13d94c0c5ded9e1159568e675829465c37f97eece8b4b11c43611e66fda1b504f8cae9d7e');

        $characters = json_decode(file_get_contents('https://gateway.marvel.com:443/v1/public/characters?limit=100&apikey=' . $api_key . '&ts=1&hash=' . $md5), true);

        return $this->render('MarvelBundle:Default:index.html.twig', array(
            'marvels' => $characters,
        ));
    }

    public function showMarvelAction(Request $request)
    {
        $api_key = '8b4b11c43611e66fda1b504f8cae9d7e';
        $md5 = md5('13d94c0c5ded9e1159568e675829465c37f97eece8b4b11c43611e66fda1b504f8cae9d7e');
        $id_marvel = $request->request->get('marvel');
        
        $characters = json_decode(file_get_contents('https://gateway.marvel.com:443/v1/public/characters/' . $id_marvel . '?limit=100&apikey=' . $api_key . '&ts=1&hash=' . $md5), true);

        return $this->render('MarvelBundle:Default:show.html.twig', array(
            'marvels' => $characters,
        ));
    }
}