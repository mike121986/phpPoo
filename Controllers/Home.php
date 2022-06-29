<?php
class Home extends Controllers{
    public function __contruct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data['page_id'] = "1";
        $data['tag_page'] = "home";
        $data['page_title'] = "Página Principal";
        $data['page_name'] = "home";
        $data['page_content'] = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt nihil laboriosam vitae suscipit, aperiam quibusdam nam quos voluptates cupiditate libero molestias totam sed repellendus earum tempora deleniti non, vero voluptas. "; 
         $this->views->getView($this,"home",$data);
    }

    public function insertar()
    {
        $data = $this->model->setUser("carlos",25);
        print_r($data);
    }

    public function select($id)
    {
        $data = $this->model->getUser($id);
        print_r($data);
    }


}