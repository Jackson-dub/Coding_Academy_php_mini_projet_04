<?php

namespace planet\moon;

include_once "Mars.php";

class Phobos{

    private $mars;

    function __construct($mars){

        $param = gettype($mars);
        

        if($param == "object"){

            $typeName = get_class($mars);

            $string = str_replace('\\','::',get_class($mars));

            if($string == "planet::Mars"){

                $this -> mars = $mars;

                echo "Phobos placed in orbit.".PHP_EOL;

            }
            
        }else{
            echo "No planet given.".PHP_EOL;
        }

    }

    function getMars(){
        return $this-> mars;
    }
}

use planet\Mars;


