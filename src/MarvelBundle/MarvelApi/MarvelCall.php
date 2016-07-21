<?php

namespace MarvelBundle\MarvelApi;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class MarvelCall
{

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function indexAction()
    {
        $api_key = '8b4b11c43611e66fda1b504f8cae9d7e';
        $md5 = md5('13d94c0c5ded9e1159568e675829465c37f97eece8b4b11c43611e66fda1b504f8cae9d7e');

        $characters = json_decode(file_get_contents('https://gateway.marvel.com:443/v1/public/characters?limit=100&apikey=' . $api_key . '&ts=1&hash=' . $md5), true);

        return $characters;
    }

    public function showAction(){
        $api_key = '8b4b11c43611e66fda1b504f8cae9d7e';
        $md5 = md5('13d94c0c5ded9e1159568e675829465c37f97eece8b4b11c43611e66fda1b504f8cae9d7e');

        $request = $this->requestStack->getCurrentRequest();

        $id_marvel = $request->get('marvel');

        $characters = json_decode(file_get_contents('https://gateway.marvel.com:443/v1/public/characters/' . $id_marvel . '?limit=100&apikey=' . $api_key . '&ts=1&hash=' . $md5), true);

        return $characters;
    }

}