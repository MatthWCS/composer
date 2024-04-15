<?php

require '../vendor/autoload.php';

use App\Hello;

$speaker = new Hello();


$speakers = [$speaker];

echo $speaker->speak();