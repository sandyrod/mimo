<?php
class Controller {

    function __construct() {
    		//nombre del controlador en uso
    	  $nombrecontrol=get_class($this);
        
        $this->view=new View();
        $this->view->set_titulo($nombrecontrol);
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