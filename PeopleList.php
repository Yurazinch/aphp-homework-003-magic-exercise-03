<?php

declare(strict_types=1);

require_once('Person.php');

class PeopleList implements Iterator
{
    private $position = 0;
    private $array = [];
    
    public function __construct() {
        $this->position = 0;
        $this->array[] = new Person('Иван', 'Иванов', 25);
        $this->array[] = new Person('Сидор', 'Сидоров', 26);
        $this->array[] = new Person('Павел', 'Павлов', 27);
        $this->array[] = new Person('Анна', 'Иванова', 28);
        $this->array[] = new Person('Ольга', 'Сидорова', 29);
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
