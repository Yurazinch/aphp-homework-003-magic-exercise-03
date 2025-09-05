<?php

declare(strict_types=1);

class PeopleList implements Iterator
{
    private $position = 0;
    private $array = array(
        "Иван Иванов",
        "Петр Петров",
        "Сергей Сергеев",
        "Павел Павлов",
        "Олег Олегов"
    );

    public function __construct() {
        $this->position = 0;
    }

    public function rewind(): void {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next(): void {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid(): bool {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }

    public function __toString(): string
    {
        return "Имя: {$this->mame}, фамилия {$this->surname}.\n";  
    }
}