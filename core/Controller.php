<?php
class Controller {

    function __construct() {
        $this->view=new Vista();
    }
    
    public function cargarModelo($nombre){
        $ruta = 'modelo/'. $nombre .'.php';
        if(file_exists($ruta)){
            require $ruta;
            $nombreModelo = $nombre;
            $this->modelo = new $nombreModelo();
        }
    }

}