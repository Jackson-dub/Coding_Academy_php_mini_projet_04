<?php

namespace chocolate;

    class Mars {

        public $id = -1;
    
        function __construct(){
            static $id = -1;
            $this ->id = ++$id;
        }
    
        function getId(){
        return $this -> id;
        }
    }  
// $test = new Mars();
//  echo $test -> getId();
//  $test1 = new Mars();
//  echo $test1 -> getId();
//  $test2 = new Mars();
//  echo $test2 -> getId();
//  $test3 = new Mars();
//  echo $test3 -> getId();



namespace planet;

    class Mars{

        private $size;

        function __construct($size = null){
            if(is_numeric($size) || $size == null){
            $this -> size = $size;
            }else{
                die;
            }
        }

        function getSize(){
            return round($this->size,2);
        }

        function setSize($arg){
            
                $this->size = round($arg,2);
                
            
        }
    }

    

//  $test = new Mars();
// $test -> setSize(5.3);
//  echo $test -> getSize();

//$test = \chocolate\Mars;
 //echo $test -> getId();
// $test1 = new Mars();
// echo $test1 -> getId();
// $test2 = new Mars();
// echo $test2 -> getId();
// $test3 = new Mars();
// echo $test3 -> getId();



 
