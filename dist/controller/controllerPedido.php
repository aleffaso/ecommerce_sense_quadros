<?php
//ID login Settings
include("../config/config.php");

//Validate card options
$tokenCard=$_POST['tokenCard'];
$hashCard=$_POST['hashCard'];

//Personal customer data
$customerFirstName=filter_input(INPUT_POST,'customerFirstName',FILTER_SANITIZE_SPECIAL_CHARS);
$customerLastName=filter_input(INPUT_POST,'customerLastName',FILTER_SANITIZE_SPECIAL_CHARS);
$customerName = $customerFirstName . ' ' . $customerLastName;
$customerEmailAddress=filter_input(INPUT_POST,'customerEmailAddress',FILTER_SANITIZE_SPECIAL_CHARS);
$customerCodeArea=filter_input(INPUT_POST,'customerCodeArea',FILTER_SANITIZE_SPECIAL_CHARS);
$customerPhoneNumber=filter_input(INPUT_POST,'customerPhoneNumber',FILTER_SANITIZE_SPECIAL_CHARS);
$customerSSN=filter_input(INPUT_POST,'customerSSN',FILTER_SANITIZE_SPECIAL_CHARS);
$customerBirthDate=filter_input(INPUT_POST,'customerBirthDate',FILTER_SANITIZE_SPECIAL_CHARS);

//Shipping information
$customerShipAddress=filter_input(INPUT_POST,'customerShipAddress',FILTER_SANITIZE_SPECIAL_CHARS);
$customerProvincy=filter_input(INPUT_POST,'customerProvincy',FILTER_SANITIZE_SPECIAL_CHARS);
$customerAddressNumber=filter_input(INPUT_POST,'customerAddressNumber',FILTER_SANITIZE_SPECIAL_CHARS);
$customerReference=filter_input(INPUT_POST,'customerReference',FILTER_SANITIZE_SPECIAL_CHARS);
$customerCity=filter_input(INPUT_POST,'customerCity',FILTER_SANITIZE_SPECIAL_CHARS);
$customerUF=filter_input(INPUT_POST,'customerUF',FILTER_SANITIZE_SPECIAL_CHARS);
$customerZipCode=filter_input(INPUT_POST,'customerZipCode',FILTER_SANITIZE_SPECIAL_CHARS);

//Payment information
/*$paymentFirstName=filter_input(INPUT_POST,'paymentFirstName',FILTER_SANITIZE_SPECIAL_CHARS);
$paymentSSN=filter_input(INPUT_POST,'paymentSSN',FILTER_SANITIZE_SPECIAL_CHARS);
$paymentPhoneNumber=filter_input(INPUT_POST,'paymentPhoneNumber',FILTER_SANITIZE_SPECIAL_CHARS);
$paymentAddress=filter_input(INPUT_POST,'paymentAddress',FILTER_SANITIZE_SPECIAL_CHARS);
$paymentAddressNumber=filter_input(INPUT_POST,'paymentAddressNumber',FILTER_SANITIZE_SPECIAL_CHARS);
$paymentoComplement=filter_input(INPUT_POST,'paymentoComplement',FILTER_SANITIZE_SPECIAL_CHARS);*/

//Item information
$itemCodeID=filter_input(INPUT_POST,'itemCodeID',FILTER_SANITIZE_SPECIAL_CHARS);
$itemPreco=filter_input(INPUT_POST,'itemAmountValue',FILTER_SANITIZE_SPECIAL_CHARS);
$qtdParcelas=filter_input(INPUT_POST,'qtdParcelas',FILTER_SANITIZE_SPECIAL_CHARS);
$itemCodeReference=filter_input(INPUT_POST,'itemCodeReference',FILTER_SANITIZE_SPECIAL_CHARS);
$itemDescription=filter_input(INPUT_POST,'itemCodeReference',FILTER_SANITIZE_SPECIAL_CHARS);
//$itemQtd=filter_input(INPUT_POST,'itemQtd',FILTER_SANITIZE_SPECIAL_CHARS);
$valorParcelas=filter_input(INPUT_POST,'valorParcelas',FILTER_SANITIZE_SPECIAL_CHARS);



$Data["email"]=EMAIL_PAGSEGURO;
$Data["token"]=TOKEN_SANDBOX;
$Data["paymentMode"]="default";
$Data["paymentMethod"]="creditCard";
$Data["receiverEmail"]=EMAIL_PAGSEGURO;
$Data["currency"]="BRL";
$Data["extraAmount"]="0.00";
$Data["itemId1"] = $itemCodeID;
$Data["itemDescription1"] = $itemDescription;
$Data["itemAmount1"] = $itemPreco;
$Data["itemQuantity1"] = "1"; //$itemQtd;
$Data["notificationURL="]="https://www.meusite.com.br/notificacao.php";
$Data["reference"]=$itemCodeReference;
$Data["senderName"]=$customerName;
$Data["senderCPF"]=$customerSSN;
$Data["senderAreaCode"]=$customerCodeArea;
$Data["senderPhone"]=$customerPhoneNumber;
$Data["senderEmail"]="c37305705247372693632@sandbox.pagseguro.com.br";
$Data["senderHash"]=$hashCard;
$Data["shippingAddressStreet"]=$customerShipAddress;
$Data["shippingAddressNumber"]=$customerAddressNumber;
$Data["shippingAddressComplement"]=$customerReference;
$Data["shippingAddressDistrict"]= $customerProvincy;
$Data["shippingAddressPostalCode"]=$customerZipCode;
$Data["shippingAddressCity"]=$customerCity;
$Data["shippingAddressState"]=$customerUF;
$Data["shippingAddressCountry"]="BRA";
$Data["shippingType"]="1";
$Data["shippingCost"]="0.00";
$data['shippingAddressRequired'] = 'false';
$Data["creditCardToken"]=$tokenCard;
$Data["installmentQuantity"]=$qtdParcelas;
$Data["installmentValue"]=$valorParcelas;
$Data["noInterestInstallmentQuantity"]=3;
$Data["creditCardHolderName"]=$customerName;
$Data["creditCardHolderCPF"]=$customerSSN;
$Data["creditCardHolderBirthDate"]=$customerBirthDate;
$Data["creditCardHolderAreaCode"]=$customerCodeArea;
$Data["creditCardHolderPhone"]=$customerPhoneNumber;
$Data["billingAddressStreet"]=$customerShipAddress;
$Data["billingAddressNumber"]=$customerAddressNumber;
$Data["billingAddressComplement"]=$customerReference;
$Data["billingAddressDistrict"]=$customerProvincy;
$Data["billingAddressPostalCode"]=$customerZipCode;
$Data["billingAddressCity"]=$customerCity;
$Data["billingAddressState"]=$customerUF;
$Data["billingAddressCountry"]="BRA";

$BuildQuery=http_build_query($Data);

$Url=URL_TRANSACTION;

$Curl=curl_init($Url);
curl_setopt($Curl,CURLOPT_HTTPHEADER,Array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
curl_setopt($Curl,CURLOPT_POST,true);
curl_setopt($Curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($Curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($Curl,CURLOPT_POSTFIELDS,$BuildQuery);
$Retorno=curl_exec($Curl);
curl_close($Curl);

$Xml=simplexml_load_string($Retorno);
var_dump($Xml);
?>
<!--<script>setTimeout(function(){ window.close();}, 1000);</script>-->
