<?php

declare(strict_types=1);

require_once('Person.php');

$pers = file_get_contents('store');

$person = unserialize($pers);

echo $person;