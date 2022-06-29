<?php

class Mysql extends Conexion
{
    private $conexion;
    private $strquery;
    private $arrValues;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }

    /**
     * este es un metodo para insertar, este recibe dos parametros primero
     * $query =  este sierve para que se mande la instruccion de insert 
     * $arrValues = en eset llega un array este debe de contener los datos 
     * que se van a insertar .
     * Dentro de este se hace el prepare y se ejecuta para mandar a la bse de datos
     */
    public function insert(string $query,array $arrValues)
    {
        $this->strquery = $query;
        $this->arrValues = $arrValues;
        $insert = $this->conexion->prepare($this->strquery);
        $resInsert=$insert->execute($this->arrValues);

        if($resInsert){
            $lastInsert = $this->conexion->lastInsertId();
        }else{
            $lastInsert = 0;
        }
        return $lastInsert;
    }

    /**
     * este metodo de slect, este recibe un string, se enviara por parametro la consuita
     * este ya contiene los querys necesarios para para ejecutar la consutla, tanto como la 
     * consulta preparada como el execute para ejecutar la consulta,
     * LA FUNCION PRINCIPAL DE ESTE METODO ES SOLO BUSCAR UN SOLO REGISTRO
     */
    public function select(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data=$result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    /**
     * este metodo de slect, este recibe un string, se enviara por parametro la consuita
     * este ya contiene los querys necesarios para para ejecutar la consutla, tanto como la 
     * consulta preparada como el execute para ejecutar la consulta,
     * LA FUNCION PRINCIPAL DE ESTE METODO BUSCA TODOS LOS REGISRTROS
     */
    public function select_all(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data=$result->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

    /**
     * este metodo, recibe dos parametros,u
     * $query que este es como tal la consulta preparada 
     * $arrValues este recibe un array con los datos para la actualizacion
     */
    public function update(string $query, array $arrValues)
    {
        $this->strquery = $query;
        $this->arrValues = $arrValues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrValues);
        return $resExecute;
    }

    /**
     * metodo delete.
     * este sirve para eliminar un registro de la base de datos 
     * recibe un parametro que este es como un ID para ser eliminado 
     */
    public function delete(string $query)
    {
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        return $result;
    }
}
