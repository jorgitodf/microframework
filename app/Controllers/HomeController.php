<?php

namespace App\Controllers;

class HomeController
{

    public function index($request)
    {
        echo "Olá Home Controller";
        echo $request->get->nome;
    }
}