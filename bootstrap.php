<?php

require __DIR__.'/Autoload.php';

// $person = new Kairos\People\Person;
// $person->setNome('Guilherme');
// $person->setIdade(25);
// $person->setPeso(86.5);

// $person2 = new Kairos\People\Person;
// $person2->setNome('Priscila');
// $person2->setIdade(27);
// $person2->setPeso(78);

//$name = (new Person)->setName(1);
$mysql = (new Kairos\DB\MySql)->connect();
$postgres = (new Kairos\DB\Postgres)->connect();
var_dump($mysql);
var_dump($postgres);