<?php
class Home extends Controllers{
    public function __contruct()
    {
        parent::__construct();
    }

    public function home($params)
    {
        $data['tag_page'] = "home";
        $data['page_title'] = "Página Principal";
        $data['page_name'] = "home";
       $this->views->getView($this,"home",$data);
    }
}