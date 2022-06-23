<?php

spl_autoload_register(function ($class) {
    if (file_exists(LIBS . 'CORE/' . $class . ".php")) {
        require_once(LIBS . 'CORE/' . $class . ".php");
    }
});