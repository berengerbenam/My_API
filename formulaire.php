<?php
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$numero = $_POST["numero"];
$password = $_POST["password"];
$typecompte = $_POST["typecompte"];
$solde = $_POST["solde"];
$url = "url_to_post";
$data = array("prenom"=>$prenom,"nom"=>$nom,"email"=>$email,"numero"=>$numero,"password"=>$password,"typecompte"=>$typecompte,"solde"=>$solde);
$donnee = json_encode($data);
$curl = curl_init($url);


curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_POSTFIELDS,$donnee);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_HTTPHEADER,array("Content-Type:application/json"));
curl_setopt($curl,CURLOPT_URL,"http://api.apitrans.sn/Compte");
//curl_setopt($curl,CURLOPT_CUSTOMREQUEST,"GET");
$result = curl_exec($curl);
curl_close($curl);

echo $donnee;

?>



