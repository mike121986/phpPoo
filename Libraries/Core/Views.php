<?php
   
   class Views
    {
        /**
         * esta funcion nos sirve para mostrar las vistas
         * siempre que el controlador sea "home" este nos llevara
         * a la vista principal, si es diferente que home este sera
         * mostrara la vista correspondiente
         */
        function getView($controller,$view)
        {
            /* obtenemos la cl */
            $controller = get_class($controller);

            if($controller == "Home")
            {
                $view = VIEWS.$view.".php";
            }
            else
            {
                $view = VIEWS.$controller."/".$view.".php";
            }
        }
    }