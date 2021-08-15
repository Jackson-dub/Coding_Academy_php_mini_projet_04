<?php
include_once "Team.php";
include_once "Mars.php";


$tete = new Astronaut("Mutta");
$teta = new Astronaut("Hibito");
//$teto = new Astronaut("Serika");
$test = new Team("spaceTeam");
$test -> add($tete);
$test -> add($teta);
//$test -> add($teto);
//$test -> add(3);
//echo $test -> countMembers()."\n";
$gouter = new chocolate\Mars();
$titi = new planet\Mars();

$teta->doActions($titi);
$teta->doActions($gouter);
//print_r($test);
//print_r($teta -> getDestination());
$test -> showMembers();
//$test -> remove($teto);
//echo $test -> countMembers()."\n";