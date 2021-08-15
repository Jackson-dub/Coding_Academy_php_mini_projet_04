<?php
class Astronaut{
    private string $name;
    private int $snacks = 0;
    private $destination = null;
    private int $id;

    function __construct($name){
        if(gettype($name) === "string"){
            $this -> name = $name;
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

    function getDestination(){
        return $this -> destination;
    }
}

//    $test = new Astronaut("mars");
//    $test1 = new Astronaut(20);
//    $test3 = new Astronaut("Edouard");
//   echo $test -> getId()."\n";
//    echo $test1 -> getId()."\n";
//    echo $test3 -> getId()."\n";

