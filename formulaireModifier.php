<?php
$numero_fournisseur = $_POST["numero_fournisseur"];
$credit = $_POST["credit"];
$url = 'url_to_post';
$data = array("numero_fournisseur"=>$numero_fournisseur,"credit"=>$credit);
$donnee = json_encode($data);


$curl = curl_init($url);


curl_setopt($curl,CURLOPT_POSTFIELDS,$donnee);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_HTTPHEADER,array("Content-Type:application/json"));
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'PUT');
curl_setopt($curl,CURLOPT_URL,"http://api.apitrans.sn/RechargeCompte");
//curl_setopt($curl,CURLOPT_URL,"http://localhost:5000/comptes/
$result = curl_exec($curl);
curl_close($curl);

echo $donnee;

?>

