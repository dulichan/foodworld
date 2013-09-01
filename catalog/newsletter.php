<?php
	echo print($_GET['email']);
 	if (isset($_GET['email'])){
		//$name =  $_GET['name'];
		//$email = $_GET['email'];
		// specify the REST web service to interact with 
		$url = 'http://localhost/sugarcrm/service/v2/rest.php'; 
		// Open a curl session for making the call 
		$curl = curl_init($url); 
		// Tell curl to use HTTP POST 
		curl_setopt($curl, CURLOPT_POST, true); 
		// Tell curl not to return headers, but do return the response 
		curl_setopt($curl, CURLOPT_HEADER, false); 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
		// Set the POST arguments to pass to the Sugar server 
		$parameters = array(
			'user_auth' => array(
		    		'user_name' => 'admin', 
		    		'password' => md5('password'), 
			),
		);
		$json = json_encode($parameters); 
		$postArgs = 'method=login&input_type=JSON&response_type=JSON&rest_data=' . $json; 
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs); 
		// Make the REST call, returning the result 
		$response = curl_exec($curl); 
		echo $response;
		// Close the connection 
		//curl_close($curl);  
		// Convert the result from JSON format to a PHP array 
		$result = json_decode($response); 
		// Get the session id 
		$sessionId = $result->id; 
		// Now, let's add a new Accounts record 
		
		$parameters = array(
			'session' => $sessionId,
			'module' => 'EmailAddresses',
			'name_value_lists' => array(
			array(
			array('name' => 'email_address', 'value' => 'foo@bar.com'),
			array('name' => 'email_address_caps', 'value' => 'FOO@BAR.COM'),
			),
			),
		);
		$json = json_encode($parameters);
		$postArgs = array(
		'method' => 'set_entries',
		'input_type' => 'JSON',
		'response_type' => 'JSON',
		'rest_data' => $json,
		);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs);

		// Make the REST call, returning the result
		$response = curl_exec($curl);
		$emailAddresses = json_decode($response,true);
		
		
		
		
		
		$parameters = array( 
		    'session' => $sessionId, 
		    'module' => 'Leads', 
		    'name_value_list' => array( 
		        array('name' => 'first_name', 'value' => 'Baby'),
		        ), 
		    ); 
		$json = json_encode($parameters); 
		$postArgs = 'method=set_entry&input_type=JSON&response_type=JSON&rest_data=' . $json; 
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs); 
		// Make the REST call, returning the result 
		$response = curl_exec($curl); 
		// Convert the result from JSON format to a PHP array 
		$result = json_decode($response,true); 
		// Get the newly created record id
		$leadId = $result['id'];
		$con=mysqli_connect("127.0.0.1:3306","root","","sugarcrm");
		if (!mysqli_query($con,"INSERT INTO `email_addr_bean_rel` (`id`, `email_address_id`, `bean_id`, `bean_module`, `primary_address`, `reply_to_address`, `date_created`, `date_modified`, `deleted`) VALUES ('426f0989-1866-184a-f81b-". rand(5, 15)."', '".$emailAddresses['ids'][0] ."', '".$leadId."', 'Leads', 1, 0, '2013-08-31 18:45:08', '2013-08-31 18:45:08', 0);"))
		  {
		  die('Error: ' . mysqli_error($con));
		 }
	}
?>