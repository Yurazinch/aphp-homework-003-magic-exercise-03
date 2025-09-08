<?php

declare(strict_types=1);

require_once('PeopleList.php');

$personList = new PeopleList;

foreach($personList as $key => $value)
{
    echo $key + 1, $value;
}