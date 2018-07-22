<?php
	// Pull in the NuSOAP code
	require_once('nusoaplib/nusoap.php');
	// Create the client instance
	$client = new nusoap_client('http://localhost/SEU/webservice/server.php?wsdl','wsdl');
	// Call the SOAP method
	$result = $client->call('sayHello',array('str'=>'hi'));
	// Display the result
	print_r($result);
	?>