<?php 
class Question
{
	private $id; 
	private $categoryId;
	private $description; 
	
	//Getter AND Setter
	public function getId()
    {
        return $this->id;
    }
	
	public function setId($id)
    {
        $this->id = $id;
    }
     
    public function getCategoryId()
    {
        return $this->categoryId;
    }
     
    public function setCategoryId($newCategoryId)
    {
        $this->categoryId = $newCategoryId;
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
	public function __construct($id, $description, $categoryId)
    {
        $this->setId($id);
        $this->setDescription($description);
		$this->setCategoryId($categoryId);
    }
}
