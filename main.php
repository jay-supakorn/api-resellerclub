<?php
	set_time_limit(0);
	
	//setup db variables
	define("DB_HOST", "localhost");
	define("DB_USER", "moqshosting_root");
	define("DB_PASS", "CMvfr45tgb*");
	define("DB_NAME", "moqshosting_com_2017");
	define("USE_IP", $_SERVER['REMOTE_ADDR']);

	//error_reporting(E_COMPILE_ERROR|E_RECOVERABLE_ERROR|E_ERROR|E_CORE_ERROR);
	require __DIR__.'/db/DBManager.php';
	// require __DIR__.'/idna_convert.class.php';
	require __DIR__.'/punycode.class.php';
	require __DIR__.'/classes/Domain.php';
	require __DIR__.'/classes/Customer.php';
	require __DIR__.'/classes/Contact.php';
	
	$method 	= $_SERVER['REQUEST_METHOD'];
	$path 		= explode('/', trim($_SERVER['PATH_INFO'],'/'));

	$function = explode('-', trim($path[0]));

	$model		= ucfirst(trim($function[0]));
	$params 	= json_decode(file_get_contents('php://input'),true);
	if (isset($function[1])) {
		$response	= $model::$function[1]($method,$path,$_REQUEST,$params);
	}else{
		$response	= $model::process($method,$path,$_REQUEST,$params);
	}
	echo json_encode($response);

?>







