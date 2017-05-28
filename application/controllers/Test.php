<?php

class Test extends CI_Controller
{
    public function index()
    {
        $g = function ($a) { echo $a; };

       echo $g(23);
    }

}