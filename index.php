<?php
require_once("Config/Config.php");

$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

if (!empty($arrUrl[1])) {
    if ($arrUrl[1] != "") {
        $method = $arrUrl[1];
    }
}

if (!empty($arrUrl[2])) {
    if ($arrUrl[2] != "") {
        for ($i = 2; $i < count($arrUrl); $i++) {
            $params .= $arrUrl[$i] . ',';
        }
        $params = trim($params, ',');
    }
}

spl_autoload_register(function ($class) {
    if (file_exists(LIBS . 'CORE/' . $class . ".php")) {
        require_once(LIBS . 'CORE/' . $class . ".php");
    }
});

//LOAd
/** concatenamos el controlador y verificamos que exista en la carpeta contriollers y le concatenamos el .php
 * si es que exsite el archivo que se esta enviando por la variable $controllerFile este hara uan instancia 
 * a la clase que debe tener el mismo nombre que el archivo, ahora verificamos la existencia del metodo
 * que debe exister en la clase, si es que 3xiste este ya hara la isntruccions que tiene l archivo
 * */

$controllerFile = "Controllers/" . $controller . ".php";
if (file_exists($controllerFile)) {
    require_once($controllerFile);
    $controller = new $controller();

    if (method_exists($controller, $method)) {
        $controller->{$method}($params);
    } else {
        echo "No existe EL metodo";
    }
} else {
    echo "No existe Controlador";
}
