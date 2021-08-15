<?php
include_once "Astronaut.php";


class Team{


    private $astronauts = [];
    private $name;

    function __construct(string $name){
       $this -> name = $name;
    }

    function getName(){
        return $this -> name;
    }

    function add($member){

        $argType = gettype($member);

        if($argType == "object"){

            $arrayObject = $member -> name;

                if(!in_array($arrayObject,$this -> astronauts)){

                    $this -> astronauts[$arrayObject] = $member;

                }

        
        }else{
            
            echo $this -> name.": Sorry, you are not part of the team.".PHP_EOL;
        }

    }

    function remove($layedOut){
        if(gettype($layedOut) == "object"){
            $name = $layedOut -> name;
        }

       // $key  = array_search($name,array_column($this -> astronauts,'name'));
        unset($this->astronauts[$name]);
        
    }

    function getAstronauts(){
        return $this -> astronauts;
    }

    function countMembers(){
        $numberMembers = count($this -> astronauts);
        return $numberMembers;
    }

    function showMembers(){

        $string = $this -> name.": ";

        if(count($this->astronauts) >= 0){


            foreach($this->astronauts as $member){

                $status = $member->destination;

                if($status){
                    $string .= "".$member->name." on mission, ";
                }else{
                    $string .= "".$member->name." on standby, ";
                }
        }
        echo $string = substr(trim($string),0,-1).".".PHP_EOL;
        }
        
    }

}

