<?php

$endPoint = array_key_exists('PATH_INFO',$_SERVER)?$_SERVER['PATH_INFO']:"";



if(array_key_exists($endPoint, $webRoutes)){
	$fileTobeLoaded = $webRoutes[$endPoint];
	//echo $fileTobeLoaded;	
	$path = __DIR__.'/'.$fileTobeLoaded;
	if(file_exists($path)){
		require_once $path;
	}else{
		exit(basename($fileTobeLoaded,'.php')."<b> Files does not Exist, Go and Create It.</b>");
	}
}else{

    if(basename($_SERVER['PHP_SELF'])== basename(__FILE__)){
        if(array_key_exists('DEFAULT_ROUTE',$webRoutes)){
            require_once __DIR__.'/'.$webRoutes['DEFAULT_ROUTE'];
        }
    }
    else{
        //this is custom error code.
        ob_clean();
        if(array_key_exists('404_ERROR_ROUTE',$webRoutes)){
            require_once __DIR__.'/'.$webRoutes['404_ERROR_ROUTE'];
        }

	exit();
}
}

//exit; //To stop footer execution

?>