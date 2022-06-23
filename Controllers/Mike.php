<?php
class Perro extends Controllers{
    public function __contruct()
    {
        parent::__construct();
    }

    public function mike($params)
    {
       echo "MENSAJE DESDE MIKE EL CONROLADOR HOME";
    }

}