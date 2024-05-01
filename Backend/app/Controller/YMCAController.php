<?php
require_once 'Backend/app/View/PageView.php';
require_once 'Backend/app/Model/Model.php';

class YMCAController{

    private $model;
    private $view;

    public function __construct()
    {
        //llamada a la view y al modelo.
        $this->model = new Model();
        $this->view = new PageView();
    }

    function home(){
        $this->view->ShowHome();
    }

    function edicion(){
        $this->view->ShowEdicion();
    }

    function equipos(){
        $this->view->ShowEquipos();
    }

    function resultados(){
        $this->view->ShowResultados();
    }

    function reglamento(){
        $this->view->ShowReglamento();
    }

    function inscripciones(){
        $this->view->ShowReglamento();
    }

    function contacto(){
        $this->view->ShowReglamento();
    }
}
