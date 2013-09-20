<html>

<head></head>

<body>

<pre>


<?php

//echo "Begin";

include('HTTP/Client.php');
include('Zend/Json.php');

//url path to vtiger/webservice.php like http://vtiger_url/webservice.php
$endpointUrl = "http://f12.ikioma/vtigerCRM/webservice.php";
//username of the user who is to logged in. 
$userName="admin";



$httpc = new HTTP_Client();
//getchallenge request must be a GET request.
$httpc->get("$endpointUrl?operation=getchallenge&username=$userName");
$response = $httpc->currentResponse();
//decode the json encode response from the server.
$jsonResponse = Zend_JSON::decode($response['body']);

//check for whether the requested operation was successful or not.
if($jsonResponse['success']==false) 
    //handle the failure case.
    die('getchallenge failed:'.$jsonResponse['error']['errorMsg']);

//operation was successful get the token from the reponse.
$challengeToken = $jsonResponse['result']['token'];


//access key of the user admin, found on my preferences page.
$userAccessKey = 'QrVFFXtdhgHEQFI';

//create md5 string concatenating user accesskey from my preference page 
//and the challenge token obtained from get challenge result. 
$generatedKey = md5($challengeToken.$userAccessKey);
//login request must be POST request.
$httpc->post("$endpointUrl", 
    array('operation'=>'login', 'username'=>$userName, 
        'accessKey'=>$generatedKey), true);
$response = $httpc->currentResponse();
//decode the json encode response from the server.
$jsonResponse = Zend_JSON::decode($response['body']);

//operation was successful get the token from the reponse.
if($jsonResponse['success']==false)
    //handle the failure case.
    die('login failed:'.$jsonResponse['error']['errorMsg']);

//login successful extract sessionId and userId from LoginResult to it can used for further calls.
$sessionId = $jsonResponse['result']['sessionName']; 
$userId = $jsonResponse['result']['userId'];
//echo $sessionId . "\n\n";
//echo "So far so good.\n\n";

$params = "sessionName=$sessionId&operation=retrieve&id=PRO1376";
//Retrieve must be GET Request.
$httpc->get("$endpointUrl?$params");
$response = $httpc->currentResponse();
//decode the json encode response from the server.
$jsonResponse = Zend_JSON::decode($response['body']);
//operation was successful get the token from the reponse.
if($jsonResponse['success']==false)
    //handle the failure case.
//    die('retrieve failed:'.$jsonResponse['error']['errorMsg']);

$retrievedObject = $jsonResponse['result'];

print_r($retrievedObject);

$httpc->get("$endpointUrl?sessionName=$sessionId&operation=listtypes");
$response = $httpc->currentResponse();
//decode the json encode response from the server.
$jsonResponse = Zend_JSON::decode($response['body']);

//operation was successful get the token from the reponse.
if($jsonResponse['success']==false)
    //handle the failure case.
    die('list types failed:'.$jsonResponse['error']['errorMsg']."\n");
//Get the List of all the modules accessible.
//$modules = $jsonResponse['result']['types'];
//print_r ($modules);

$moduleName = 'Products';

//use sessionId created at the time of login.
$params = "sessionName=$sessionId&operation=describe&elementType=$moduleName";
//describe request must be GET request.
$httpc->get("$endpointUrl?$params");
$response = $httpc->currentResponse();
//decode the json encode response from the server.
$jsonResponse = Zend_JSON::decode($response['body']);

//operation was successful get the token from the reponse.
if($jsonResponse['success']==false)
    //handle the failure case.
    die('describe object failed:'.$jsonResponse['error']['errorMsg']);
//get describe result object.
$description = $jsonResponse['result'];

print_r($description);

?>
</pre>

</body>
</html>