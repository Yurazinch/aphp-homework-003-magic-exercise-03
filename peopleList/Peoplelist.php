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
        $this->position = 0;
    }

    #[\ReturnTypeWillChange]
    public function current() {
        return $this->array[$this->position];
    }

    #[\ReturnTypeWillChange]
    public function key() {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function valid(): bool {
        return isset($this->array[$this->position]);
    }
}