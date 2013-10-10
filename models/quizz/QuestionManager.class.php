<?php
class QuestionManager
{
	private $_db; // Instance de PDO.
	 
	public function __construct($db)
	{
		$this->setDb($db);
	}
	 
	public function add(Question $question)
	{
	   
	}
	 
	public function delete(Question $question)
	{
	    // Exécute une requête de type DELETE.
	}
	 
	public function get($id)
	{
	    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
	}
 

	public function getList()
  	{	
    $query = "SELECT * FROM category;";
    
    //Exécution de la requête
    $result = $this->_db->query($query) or die(implode(" ", $conn->errorInfo()));
    
    //Paramétrer le mode de retour pour récupérer les données sous forme d'objet                
    $result->setFetchMode(PDO::FETCH_OBJ);
    
    $category = array();  
	      
	while($row = $result->fetch()){
        $category[$row->id] = new Category($row->id, $row->description);
        //$category[$row->id] = new Category($row);
	}
	
	$result->closeCursor(); // Termine le traitement de la requête
	
	return $category;
  	}
 
	public function update(Question $question)
	{
	    // Prépare une requête de type UPDATE.
	    // Assignation des valeurs à la requête.
	    // Exécution de la requête.
	}
	 
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
}
?>