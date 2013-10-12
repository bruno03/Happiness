<?php
 
	require'/models/ConnectionDBManager.class.php';

	//acces a la BD
	$conn = ConnectionDBManager::getConnexion();
	
	//creation du modele
	$categoryManager = new CategoryManager($conn);
	//lancement de la méthode GET 
	$category = $categoryManager->getList();
	//print_r($category);


	$_SESSION['register'] = $form_inscription; 
	
	include_once('/view/user/registerView.php');