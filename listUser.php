<? include('config.php'); ?>
<?php


// kvstore API url
$url = $APIUrl.'your api';

        
//authorization        
/*$apiKey='QENFQVVUSDA5Iw==';   
$headers = array(
     'Authorization: '.$apiKey
);
*/
$arrayUser=array();
$ch = curl_init($url);
// To save response in a variable from server, set headers;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//authorization  
//curl_setopt($ch01, CURLOPT_HTTPHEADER, $headers);
// Get response
$response = curl_exec($ch);
$arrayUser = json_decode($response, true);
echo "<pre>";
print_r($arrayUser);
?>