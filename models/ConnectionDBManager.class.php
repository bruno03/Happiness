<?php
class ConnectionDBManager
{
	//Method to get the connexion of the BD
	static public function getConnexion()
	{
		try
		{
	    $bdd = new PDO('mysql:host=localhost;dbname=barometer', 'root', '@Jnfpds12');
		return $bdd; 
		}
		catch (Exception $e)
		{
		    die('Erreur : ' . $e->getMessage());
		}
	}
}
