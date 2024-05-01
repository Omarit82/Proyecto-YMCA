<?php
require_once 'Backend/app/View/LoginView.php';
require_once 'Backend/app/Model/Model.php';
class LoginController{
    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new LoginView();
        $this->model = new Model();
    }

    function login(){
        $this->view->ShowLogin();
    }
}