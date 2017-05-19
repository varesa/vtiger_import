<html>

<head></head>

<body>

<pre>


<?php

function r($text) {
    $text=trim($text);
    $text = str_replace("&","%26",$text);
    return $text;
}

if(isset($_POST['add'])) {

    include('HTTP/Client.php');
    include('Zend/Json/Json.php');

    $endpointUrl = "https://vtiger.intra.alrekry.fi/vtiger/webservice.php";
    $userName="admin";
    $userAccessKey = 'QrVFFXtdhgHEQFI';

    $httpc = new HTTP_Client();
    $httpc->get("$endpointUrl?operation=getchallenge&username=$userName");
    $response = $httpc->currentResponse();
    $jsonResponse = Zend\Json\Json::decode($response['body']);
    //print_r($jsonResponse);
    if($jsonResponse->success==false) 
	die('getchallenge failed:'.$jsonResponse->error->errorMsg);

    $challengeToken = $jsonResponse->result->token;
    $generatedKey = md5($challengeToken.$userAccessKey);
    $httpc->post("$endpointUrl", 
		 array('operation'=>'login', 'username'=>$userName, 
    	               'accessKey'=>$generatedKey), true);
    $response = $httpc->currentResponse();
    $jsonResponse = Zend\Json\Json::decode($response['body']);
    //print_r("a");
    //print_r($jsonResponse);
    //print_r("b");
    if($jsonResponse->success == false)
	die('login failed:'.$jsonResponse->error->errorMsg);

    $sessionId = $jsonResponse->result->sessionName; 
    $userId = $jsonResponse->result->userId;

    if(trim($_POST['PUHELIN']) != "" && trim($_POST['MATKAPUHELIN']) != "") {
	$puhelin = trim($_POST['PUHELIN']) . ", " . trim($_POST['MATKAPUHELIN']);
    } else if(trim($_POST['PUHELIN']) != "" && trim($_POST['MATKAPUHELIN']) == "") {
	$puhelin = trim($_POST['PUHELIN']);
    } else {
	$puhelin = trim($_POST['MATKAPUHELIN']);
    }

    $osoite = trim($_POST['OSOITE']) . "\n";
    if(trim($_POST['KAUPUNGINOSA______']) != "") {
	$osoite = $osoite . $_POST['KAUPUNGINOSA______'] . "\n";
    }
    $osoite = $osoite . $_POST['POSTINUMERO'] . " " . $_POST['POSTITOIMIPAIKKA__'];

    $nimi = $_POST['SUKUNIMI__________'] . " " . $_POST['ETUNIMI___________'];

    $contactData = array('discontinued'=>true,
			'productname'=>r($nimi),
			'cf_538'=>r($_POST['EMAIL']),
			'cf_539'=>r($puhelin),
			'cf_540'=>r($osoite),
			'cf_541'=>r($_POST['AMMATTI___________']),
			'productcategory'=>r($_POST['ala']),
			'description'=>r($_POST['full_form']),
			'cf_542'=>r($_POST['ERITYISTAIDOT']),
			'cf_543'=>r($_POST['HUOMIOT']),
			'assigned_user_id'=>'18x1' // ModuleID x UserID "'Users'x'admin'"
			);
    $objectJson = Zend\Json\Json::encode($contactData);
    $moduleName = 'Products';

    $params = array("sessionName"=>$sessionId, "operation"=>'create', 
		    "element"=>$objectJson, "elementType"=>$moduleName);
//    print_r($params);
    $httpc->post("$endpointUrl", $params, true);
    $response = $httpc->currentResponse();
    print_r($response);
    $jsonResponse = Zend\Json\Json::decode($response['body']);

    if($jsonResponse->success==false)
	die('create failed: '.$jsonResponse->error->message);
    $savedObject = $jsonResponse->result; 
    $id = $savedObject->id;

    echo "Lisätty: " . $nimi . ".\n\n";
    $cmd = "mv " . $_POST['fname'] . " " . "/var/www/html/lomakkeet/accepted 2>&1";
    exec($cmd,$pal);
    //print_r($pal);
    
} else if(isset($_POST['remove'])) {
    echo "Poistettu.";
    $cmd = "mv " . $_POST['fname'] . " " . "/var/www/html/lomakkeet/rejected";
    shell_exec($cmd);
} else {
    echo "Jotain outoa tapahtui.";
}
?>

</pre>

<form method="GET" action="mail2form.php">
    <input type="submit" value="Seuraava lomake">
</form> 

<form method="GET" action="index.php">
    <input type="submit" value="Päävalikkoon">
</form> 

</body>
</html>
