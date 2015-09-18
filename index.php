<?php

spl_autoload_register('auto');

    function auto($clase)
	{
	// Optimizando carga
		require 'core/'.$clase. ".php";
    
    
	}
	$app=new bootstrap();