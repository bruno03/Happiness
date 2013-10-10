<?php 

require'/models/buisnessObject/Category.class.php';
require'/models/quizz/Categorymanager.class.php';
require'/models/ConnectionDBManager.class.php';

// function chargerClasse($classname)
// {
  // require '.'/'.'/$classname.'.class.php';
// }
//  
// spl_autoload_register('chargerClasse');

	//acces a la BD
	$conn = ConnectionDBManager::getConnexion();
	
	//creation du modele
	$categoryManager = new CategoryManager($conn);
	//lancement de la méthode GET 
	$category = $categoryManager->getList();
	print_r($category);
		
	
	
	
        

