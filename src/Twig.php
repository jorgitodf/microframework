<?php

namespace App\Framework;

class Twig
{
    public function render()
    {
        $loader = new Twig_Loader_Filesystem('../app/Views');
        return new Twig\Environment($loader);
    } 
}


