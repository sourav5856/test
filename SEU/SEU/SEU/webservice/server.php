<?php


	require_once "nusoaplib/nusoap.php";

	function sayHello($str)
	{

		if($str=="hi")		//change
			return "hello";
		else
			return "I don't know";
	}

	$server = new soap_server();
	$server->configureWSDL('pushsmswsdl', 'urn:pusmsmswsdl');
	//$server->register("sayHello");

	$server->register('sayHello',		//change
         array("str" => "xsd:string"),
    array("return" => "xsd:string"),
    "",
    "",
    "rpc",
    "encoded",
    "Get food by type");                 // description
//*/
	
	


	@$server->service(file_get_contents("php://input"));
?>