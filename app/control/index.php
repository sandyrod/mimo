<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        /*$logeado = Session::get('logeado');  
 
        if (!$logeado) {
            Session::destroy();
            header('location: ' . URL . 'login');
            exit;
        }*/
        $this->view->set_titulo = ' - Index';
    }

    public function index() {
    	  $this->view->version=$this->app_version;
        $this->view->render('index/index');
    }

    public function detalles() {
        $this->view->render('index/index');
    }

}
