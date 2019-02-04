<?php

/**
 * Created by PhpStorm.
 * User: krunal
 * Date: 2019-02-01
 * Time: 3:09 AM
 */
class View
{

    protected $view_file;
    protected $view_data;

    public function __construct($view_file,$view_data)
    {
        $this->view_file = $view_file;
        $this->view_data = $view_data;
    }
    
    function render(){
        if(file_exists(VIEW.$this->view_file.".phtml")){
            include VIEW.$this->view_file.".phtml";
        }
    }

    function getAction(){
        return explode("/",$this->view_file)[1];
    }
    
}