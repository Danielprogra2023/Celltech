<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $view;

public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }

    public function home ()
    {
        //echo "<h1>Eu sou a Home</h1>";
        echo $this->view->render("home",[]);
    }

    public function about ()
    {
        echo $this->view->render("about",[]);
    }
    public function profile ()
    {
        echo $this->view->render("profile",[]);
    }
    public function contact ()
    {
        echo $this->view->render("contact",[]);
    }

    public function product ()
    {
        echo $this->view->render("product",[]);
    }

    public function location ()
    {
        echo $this->view->render("location",[]);
    }

    public function cart () : void
    {
        echo $this->view->render("cart",[]);
    }

    public function faq () : void
    {
        echo $this->view->render("faq",[]);
    }

    public function login() : void
    {
        echo $this->view->render("login",[]);
    }

    public function error(array $data)
    {
        var_dump($data);
    }

}