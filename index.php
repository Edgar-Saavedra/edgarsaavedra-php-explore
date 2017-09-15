<?php

require('./vendor/autoload.php');
use \EdgarSaavedra\Basics;
use \EdgarSaavedra\Network;
use \EdgarSaavedra\SQL;

//$Example = new \EdgarSaavedra\OOP\Example('my name!!!!!1');
//Kint::dump($Example->getName());
//Kint::dump(Basics\LanguageBasics::literals());
//Basics\LanguageBasics::constants();
//Basics\LanguageBasics::arrays();
//Kint::dump(Network\WorkingWithPredifined::getGlobals());
//echo json_encode(Network\WorkingWithPredifined::getGlobals());
$db_example = new SQL\SQLBasics();
?>
	<br>
<?php
//Basics\LanguageBasics::traversArray([1,2,[23,3,2,1,2],212,['a'=>1,'b'=>2,'c'=>33],44,['a'=>'hiii','b'=>2,'c'=>33, 'd'=>['a'=>1,'b'=>['aaaa'=>1,'b'=>2,'c'=>33],'c'=>33]]]);
