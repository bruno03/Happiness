<?php 
class Category
{
	private $id;
	private $description; 
	
	//Getter AND Setter
	public function getId()
    {
        return $this->id;
    }
	
	public function getDescription()
    {
        return $this->description;
    }
     
    public function setDescription($newDescription)
    {
        $this->description = $newDescription;
    }

	//Constructor	
	public function __construct($id, $description)
    {
        $this->id = $id;
        $this->description = $description;
    }
    
    // //Constructor	
	// public function __construct(array $donnee)
    // {
      // $this->hydrate($donnees);
    // }
	
	public function hydrate(array $donnees)
  	{
	   if (isset($donnees['id']))
	  {
	    $this->setId($donnees['id']);
	  }
	 
	  if (isset($donnees['description']))
	  {
	    $this->setDescription($donnees['description']);
  }
	    // foreach ($donnees as $key => $value)
	    // {
	      // $method = 'set'.ucfirst($key);
// 	       
	      // if (method_exists($this, $method))
	      // {
	        // $this->$method($value);
	      // }
	    // }
  	}
}
