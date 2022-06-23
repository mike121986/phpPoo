<?php
/**
 * este es una funcion autoload, todos los archivos vana a pasar por esta clase
 * y este decidira que archivo es el que mandara,el parametro que trae el nombre de cada archivo
 * 
 */
spl_autoload_register(function ($class) {
    if (file_exists("Libraries/" . 'CORE/' . $class . ".php")) {
        require_once("Libraries/" . 'CORE/' . $class . ".php");
    }
});