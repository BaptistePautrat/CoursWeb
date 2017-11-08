<?php

class Movie
{
    private  $name;
    private  $duration;
    private  $releaseYear;
    private  $description;
    
    
    function __construct($name="", $duration="", $releaseYear="", $description="")
    {
          $this->name = $name;
          $this->duration = $duration;
          $this->releaseYear = $releaseYear;
          $this->description = $description; 
    }
    
    
    
    public function getName()
    {
        
        return $this->name = $name;
    }
    
    public function setName($name ="")
    {
       $this->name = $name;
       
    }
    
    
    
     public function getDuration()
    {
        
        return $this->duration = $duration;
    }
    
    public function setDuration($name ="")
    {
       $this->duration = $duration;
       
    }
      
      
      
    public function getReleaseYear()
    {
        
        return $this->releaseYear = $releaseYear;
    }
    
    public function setReleaseYear($name ="")
    {
       $this->releaseYear = $releaseYear;
       
    }
    
    
    
       
    public function getDescription()
    {
        
        return $this->description = $description;
    }
    
    public function setDescription($name ="")
    {
       $this->description = $description;
       
    }
    

    function toString()
    {
          echo  $this->name . " " . $this->duration . " " . $this->releaseYear . " " . $this->description . " <br>";
        
        
    }
  
}

$myMovie = new Movie('toto va a la plage','12h','1786','C\'est toto qui va a la plage '); 
$myMovie->toString();

$myMovie->setName('Titanic le retour');
$myMovie->toString();


