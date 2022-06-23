<?php
   
   class Views
    {
        /**
         * esta funcion nos sirve para mostrar las vistas
         * siempre que el controlador sea "home" este nos llevara
         * a la vista principal, si es diferente que home este sera
         * mostrara la vista correspondiente
         */
        function getView($controller,$view,$data="")
        {
            /* obtenemos la cl */
            $controller = get_class($controller);

            if($controller == "Home")
            {
                $view = "views/".$view.".php";
            }
            else
            {
                $view = "views/".$controller."/".$view.".php";
            }

            require_once($view);
        }
    }