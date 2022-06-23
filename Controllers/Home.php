<?php
class Home extends Controllers{
    public function __contruct()
    {
        parent::__construct();
    }

    public function home($params)
    {
       // echo "MENSAJE DESDE EL CONROLADOR HOME";
    }

    public function datos($params)
    {
        echo "datos recibidos: ".$params;
    }
    public function carrito($params)
    {
        $carrito = $this->model->getCarrito($params);
        echo $carrito;
    }
}