<?php
session_start();
/* Ajoute image dans base de données "imagesusers"*/
	include 'connexionbdd.php';
	$bdd ->exec("INSERT INTO imagesusers(id,nom) VALUES('SELECT id FROM membres WHERE id ={$_SESSION['id']}')");

?>
