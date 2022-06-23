<?php

class HomeModel
{
    function __construct()
    {
        //echo "mensaje desde e lmodelo home";
    }

    public function getCarrito($params)
    {
        return "datos del carrito No.".$params;
        
    }


}