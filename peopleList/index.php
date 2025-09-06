<?php

declare(strict_types=1);

require_once('PeopleList.php');

$personList = new PeopleList;

foreach($personList as $key => $value)
{
    var_dump($key, $value);
}