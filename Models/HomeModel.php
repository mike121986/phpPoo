<?php

class HomeModel extends Mysql
{
    function __construct()
    {
        parent::__construct();   
    }

    public function setUser(string $nombre, int $edad)
    {
        $query_insert = "INSERT INTO usuario (nombreUsuario, edadUsusario) VALUES (?, ?)";
        $arrData = array($nombre,$edad);
        $request_insert = $this->insert($query_insert,$arrData);
        return $request_insert;
    }

    public function getUser(int $id)
    {
        $select = "SELECT * from usuario where idUsuario = $id";
        $request = $this->select($select);
        return $request;
    }

}