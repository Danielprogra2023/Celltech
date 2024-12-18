<?php

namespace Source\App;

use League\Plates\Engine;

class Admin
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/adm","php");
    }

    public function home ()
    {
        //echo "<h1>Eu sou a Home...</h1>";
        echo $this->view->render("home",[]);
    }

    public function products () {
        echo $this->view->render("products",[]);
    }

    public function profile ()
    {
       echo $this->view->render("profile",[]);
    }

    public function overview ()
    {
       echo $this->view->render("overview",[]);
    }

    public function user ()
    {
       echo $this->view->render("user",[]);
    }
    public function report ()
    {
       echo $this->view->render("report",[]);
    }

}