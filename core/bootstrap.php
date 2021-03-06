<?php
	
	session_start();
	
	require 'app/config/config.php';
	require 'app/config/database.php';
		
 class Bootstrap
	{
	
	function __construct() {
		
   	
   	  $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //echo $url[0];
        if(empty($url[0])){
        		
            require 'app/control/index.php';
            $controlador=new Index();
            $controlador->index();
            return false;
        }
        
        $file = 'app/control/' . $url[0] . '.php';
        //echo $file;
        if(file_exists($file)){
          require $file;  
        }else{
            $this->error();
        }
        
        $controlador = new $url[0];
        $controlador->cargarModelo($url[0]);
             
             
             //Llamando los metodos
        if (isset($url[2])) {
            if(method_exists($controlador, $url[1])){
                 $controlador->{$url[1]}($url[2]);
            }else{
                $this->error();
            }
           
        } else {
            if (isset($url[1])) {
                 if(method_exists($controlador, $url[1])){
                    $controlador->{$url[1]}();
                 }else{
                     $this->error();
                 }
            }else{
                $controlador->index();
            }
        }
    }

	function app_version () {
		return '1.0';
	}
	

    
    function error(){
        require 'error.php';
        $controlador=new Error();
        $controlador->index();
        return false;
    }
}