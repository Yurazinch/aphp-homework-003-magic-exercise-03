<?php

declare(strict_types=1);

require_once('Person.php');

$person = new Person('', '', 0);

echo $person;

$person->name = 'Иван';
echo $person->name."\n";
$person->surname = 'Иванов';
echo $person->surname."\n";
$person->age = 30;
echo $person->age."\n";

echo $person;

$pers = serialize($person);

file_put_contents('store', $pers);

