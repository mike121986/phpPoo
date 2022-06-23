<?php
class Errors extends Controllers{
    public function __contruct()
    {
        parent::__construct();
    }

    public function notFound()
    {
        $this->views->getView($this,"error");
    }

}

$notFound = new Errors();
$notFound->notFound();