<?php

require'/models/buisnessObject/Question.class.php';
require'/models/quizz/QuestionManager.class.php';
require'/models/ConnectionDBManager.class.php';

	//acces a la BD
	$conn = ConnectionDBManager::getConnexion();
	
	//creation du modele
	$questionManager = new QuestionManager($conn);
	//lancement de la méthode GET 
	$questions = $questionManager->getList();
	//print_r($category);
	
	//print_r($questions);
	$_SESSION['questions'] = $questions; 
	
	include_once('/view/quizz/quizzView.php');