
<?php

/**
 * Description of api
 *
 * @author DESMOND
 */

include_once 'Configs/config.php';


if(PHOENIX_MODE == 'dev'){
 error_reporting(E_ALL);
 ini_set('display_errors','On');
}

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|woff|woff2|ttf|html|otf)$/', $_SERVER["REQUEST_URI"])) {
    return false;   // serve the requested resource as-is.
} else { 
    $pos = strpos($_SERVER['REQUEST_URI'],ROOT_PATH);
    $request = substr($_SERVER['REQUEST_URI'],$pos+1);
    if(!empty($request)){
        $_REQUEST['request'] = $request;
    }
	
	include_once 'index.php';
}

?>