<?php
class Home extends Controllers{
    public function __contruct()
    {
        parent::__construct();
    }

    public function home($params)
    {
       $this->views->getView($this,"home");
    }
}