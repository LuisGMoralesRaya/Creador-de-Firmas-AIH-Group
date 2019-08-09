<?php
$server = 'localhost';
$username = 'luisgmor_kickroo';
$password = 'kickroot12-';
$database = 'luisgmor_emailSignature';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}