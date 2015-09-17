<?php
class Controller {

    function __construct() {
        $this->view=new View();
    }
    
    public function cargarModelo($nombre){
        $ruta = URL.'app/modelo/'. $nombre .'.php';
        if(file_exists($ruta)){
            require $ruta;
            $nombreModelo = $nombre;
            $this->modelo = new $nombreModelo();
        }
    }

}