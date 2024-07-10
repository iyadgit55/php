<?php
class Person 
{
    private $fname;
    private $lname;
    public function __construct($fname, $lname) 
    {
        echo "\nInitializing the object..."; 
        $this->fname = $fname;
        $this->lname = $lname;
    }
    public function __destruct()
    {
        echo "\n\nDestroying Object...\n";
    }
    public function showName() 
    {
        echo "\n\tMy name is: " . $this->fname . " " . $this->lname; 
    }
}    
$fname = "John";
$lname = "Doe";
$p = new Person($fname, $lname);
$p->showName();    
?>
