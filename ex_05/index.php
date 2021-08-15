<?php

include "Phobos.php";

$argtest = new planet\Mars();
$toto = new planet\Mars();
new planet\moon\Phobos($toto);
new planet\moon\Phobos($argtest);
new planet\moon\Phobos(3);