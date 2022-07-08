<?php
class Roles extends Controllers{
    public function __contruct()
    {
        parent::__construct();
    }

    public function roles()
    {
        $data['page_id'] = 3;
        $data['page_tag'] = "Roles Usuario";
        $data['page_name'] = "rol_usuario";
        $data['page_title'] = "Roles Usuario <small> Tienda Virtual</small>";
        $data['page_functions_js'] = "functions_roles.js";
        $this->views->getView($this,"roles",$data);
    }



}