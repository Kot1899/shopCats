<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

class milanController
{
    /**
     * @return void
     * @Route ("/milan", name="playersMilan");
     */
    function playersMilan()
    {
        echo 'hello from MIlan players';
        die;
    }

    /**
     * @return void
     * @Route ("/milan/ibra", name="playerIbra");
     */
    function playerIbra()
    {
        echo 'hello from Ibraaaa couch';
        die;
    }


}