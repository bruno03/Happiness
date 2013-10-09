<?php 

require'/models/buisnessObject/Category.class.php';
require'/models/quizz/Categorymanager.class.php';

// function chargerClasse($classname)
// {
  // require '.'/'.'/$classname.'.class.php';
// }
//  
// spl_autoload_register('chargerClasse');

	//acces a la BD
	$conn = connectionDB();
	
	//creation du modele
	$categoryManager = new CategoryManager($conn);
	//lancement de la méthode GET 
	$category = $categoryManager->getList();
	print_r($category);
		
	
	
	// connection à la BD
	function connectionDB(){
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=barometer', 'root', '');
		return $bdd; 
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
} 
        

