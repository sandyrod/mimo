<?php
	
	session_start();
	
	require 'app/config/config.php';
	require 'app/config/database.php';
	echo 'entrando en bootstrap';	
 class Bootstrap
	{
	
	function __construct() {
		echo 'entrando en el contructor';
   	spl_autoload_register(auto);
   	  $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        
        if(empty($url[0])){
            require 'control/index.php';
            $controlador=new Index();
            $controlador->index();
            return false;
        }
        
        $file = 'control/' . $url[0] . '.php';
        if(file_exists($file)){
          require $file;  
        }else{
            $this->error();
        }
        
        $controlador = new $url[0];
        $controlador->cargarModelo($url[0]);
             
    }

	function app_version () {
		return '1.0';
	}

	
    
  function auto($class)
	{
	// Optimizando carga
	$clases = array(
		'ActiveRecord'    => CORE . 'libs/active_record.php',
		'Load'            => CORE . 'kumbia/load.php',
		'Exception' => CORE . 'kumbia/kumbia_exception.php',
	);
	if( array_key_exists ($class, $clases))
	 {
        return include $clases[$class];
    }
    
    
	}
	

    
    function error(){
        require 'controlador/error.php';
        $controlador=new Error();
        $controlador->index();
        return false;
    }
}