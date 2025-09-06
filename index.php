<?php

declare(strict_types=1);

require_once('Person.php');

$person = new Person('Иван', 'Иванов', 10);

echo $person;

$person->age = 30;
echo $person->age."\n";

echo $person;

$pers = serialize($person);

file_put_contents('store', $pers);

