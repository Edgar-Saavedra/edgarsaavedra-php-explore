<?php

require('./vendor/autoload.php');
use \EdgarSaavedra\Basics;
use \EdgarSaavedra\Network;

//$Example = new \EdgarSaavedra\OOP\Example('my name!!!!!1');
//Kint::dump($Example->getName());
//Kint::dump(Basics\LanguageBasics::literals());
//Kint::dump(Network\WorkingWithPredifined::getGlobals());
echo json_encode(Network\WorkingWithPredifined::getGlobals());
