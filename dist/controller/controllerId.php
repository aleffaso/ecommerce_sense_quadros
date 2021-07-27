<?php

include("../config/config.php");

$Url=URL_SESSION."".EMAIL_PAGSEGURO."&token=".TOKEN_SANDBOX."";
$Curl=curl_init($Url);
curl_setopt($Curl,CURLOPT_HTTPHEADER,array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
curl_setopt($Curl,CURLOPT_POST,true);
curl_setopt($Curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($Curl,CURLOPT_RETURNTRANSFER,true);
$Retorno=curl_exec($Curl);
curl_close($Curl);

$Xml=simplexml_load_string($Retorno);
echo json_encode($Xml);

?>
