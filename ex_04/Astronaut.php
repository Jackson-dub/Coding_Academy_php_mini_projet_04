<?php

 include_once "Mars.php";



  class Astronaut{

     public  $name;
     public $snacks = 0;
     public $destination;
     public $id;

     function __construct($name){

         if(gettype($name) === "string"){
             $this->name = $name;
             static $id = -1;
             $this ->id = ++$id;
             echo $this->name." ready for launch !".PHP_EOL;
           

         }else{
            die;
         }   
     }

     function getId(){
         return $this -> id;
     }

     function getSnacks(){
         return $this-> snacks;
     }

     function doActions($todo = null){

         if($todo === null){
             echo $this->name.": Nothing to do.".PHP_EOL;
          }else{
             
                $planet = new planet\Mars();
                $exemplechoco = new chocolate\Mars();

                if(gettype($todo) == "object"){
        
                    if(get_class($todo) === get_class($planet)){

                         echo $this->name.": started a mission !".PHP_EOL;
                         $this -> destination = $todo;
    
                    }elseif(get_class($todo) === get_class($exemplechoco)){
                    echo $this -> name." is eating mars number ".$todo->id.".".PHP_EOL;
                    $this -> snacks = ++$this -> snacks;
                    };
          }
        }
     }

     function getDestination(){
        return $this -> destination;
    }


     function __destruct(){

        if($this -> destination == null){
            echo $this->name.": I may have done nothing, but I have ".$this -> snacks." Mars to eat at least !".PHP_EOL;
        }else{
            echo $this->name.": Mission aborted !".PHP_EOL;
        }

     }

 }
 

 