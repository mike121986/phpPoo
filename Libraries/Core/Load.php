<?php
//LOAd
/** concatenamos el controlador y verificamos que exista en la carpeta contriollers y le concatenamos el .php
 * si es que exsite el archivo que se esta enviando por la variable $controllerFile este hara uan instancia 
 * a la clase que debe tener el mismo nombre que el archivo, ahora verificamos la existencia del metodo
 * que debe exister en la clase, si es que 3xiste este ya hara la isntruccions que tiene l archivo
 * */
$controller = ucwords($controller);
$controllerFile = "Controllers/" . $controller . ".php";
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();

    if (method_exists($controller, $method)) {
        $controller->{$method}($params);
    } else {
        require_once("Controllers/Error.php");
    }
} else {
    require_once("Controllers/Error.php");
}