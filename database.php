<?php
$server = 'localhost';
$username = 'luismorales';
$password = 'kickroot12-';
$database = 'generadorDeFirmas';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}