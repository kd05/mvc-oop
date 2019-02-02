<?php

/**
 * Created by PhpStorm.
 * User: krunal
 * Date: 2019-01-31
 * Time: 2:46 AM
 */
class homeController extends Controller
{

    public function index($id = "", $name = ""){

//        var_dump($this);
        $this->view = $this->view("home/index", array(
            "id" => $id,
            "name" => $name
        ));
        $this->view->render();
    }

    public function aboutUs(){
        $this->view = $this->view("home/aboutUs", []);
        $this->view->render();
    }

}