<?php
class Mars {

    public $id = -1;

    function __construct(){
        static $id = -1;
        $this ->id = ++$id;
    }

    function getId(){
    return $this -> id;
    }

};

// $test = new Mars();
  
// $test1 = new Mars();
  
// $test2 = new Mars();
  
// $test3 = new Mars();
//   echo $test3 -> getId();
//   echo $test2 -> getId();
//   echo $test1 -> getId();
//   echo $test -> getId();