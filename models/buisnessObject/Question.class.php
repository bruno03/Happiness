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
}
