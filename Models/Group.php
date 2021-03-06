<?php

require_once(__DIR__ . "/../core/ValidationException.php");

class Group
{
    private $id;
    private $name;
    private $description;
    private $owner;
    private $type;
    private $creationdate;
    private $status;
    
    
    public function __construct($id = NULL, $name = NULL, $description = NULL, $owner = NULL, $type = NULL, $creationdate = NULL, $status = NULL)
    {
        $this->id           = $id;
        $this->name         = $name;
        $this->description  = $description;
        $this->owner        = $owner;
        $this->type         = $type;
        $this->creationdate = $creationdate;
        $this->status       = $status;
    }
    
    
    
    public function getID()
    {
        return $this->id;
    }
    
    private function setID($id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    private function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    
    public function getDescription()
    {
        return $this->description;
    }
    
    
    private function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    public function getOwner()
    {
        return $this->owner;
    }
    
    private function setOwner($owner)
    {
        $this->owner = $owner;
        
        return $this;
    }
    
    
    public function getType()
    {
        return $this->type;
    }
    
    private function setType($type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    
    public function getCreationDate()
    {
        return $this->creationdate;
    }
    
    
    private function setCreationDate($creationdate)
    {
        $this->creationdate = $creationdate;
        
        return $this;
    }
    
    
    public function getStatus()
    {
        return $this->status;
    }
    
    
    private function setStatus($status)
    {
        $this->status = $status;
        
        return $this;
    }
    
    public function checkIsValidForCreate()
    {
        $errors = array();
        if (strlen($this->name < 4)) {
            $errors["groupname"] = "Group name must be at least 5 characters length";
            
        }
        
        if (sizeof($errors) > 0) {
            throw new ValidationException($errors, "Group is not valid");
        }
    }
    
    
}
?>
