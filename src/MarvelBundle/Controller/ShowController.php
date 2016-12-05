<?php

namespace MarvelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowController extends Controller{

    public function showAction($id)
    {
        if ($id)
            $id_marvel = $id;
        else
            $id_marvel = $_POST['id_marvel'];

        $api_key = '8b4b11c43611e66fda1b504f8cae9d7e';
        $md5 = md5('13d94c0c5ded9e1159568e675829465c37f97eece8b4b11c43611e66fda1b504f8cae9d7e');

        $character = json_decode(file_get_contents('https://gateway.marvel.com:443/v1/public/characters/' . $id_marvel . '?apikey=' . $api_key . '&ts=1&hash=' . $md5), true);

        return $this->render('MarvelBundle:Default:show.html.twig', array(
            'character' => $character,
        ));
    }
}