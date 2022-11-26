<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

class testController
{
    /**
     * @return void
     * @Route ("/mytestController", name="test");
     */
    function test()
    {
        echo 'hello kooooooot';
        die;
    }
}