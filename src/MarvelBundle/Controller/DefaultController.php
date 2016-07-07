<?php

namespace MarvelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{

    public function homeAction(){
        return $this->render('default/index.html.twig');
    }

    public function indexAction(){$api_key = '8b4b11c43611e66fda1b504f8cae9d7e';$md5 = md5('13d94c0c5ded9e1159568e675829465c37f97eece8b4b11c43611e66fda1b504f8cae9d7e');$paf = json_decode(file_get_contents('https://gateway.marvel.com:443/v1/public/characters?limit=100&apikey=' . $api_key . '&ts=1&hash=' . $md5), true);return $this->render('MarvelBundle:Default:index.html.twig', array('pif' => $paf,));}}