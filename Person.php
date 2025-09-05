<?php

declare(strict_types=1);

class Person 
{
    public function __construct(
        private string $name,
        private string $surname,
        private int $age) 
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
        }

    public function __toString(): string
    {
        return "\n Имя: {$this->mame},\n фамилия {$this->surname},\n возраст {$this->age} лет.\n";  
    }

    public function __set(string $property, mixed $value)
    {
        $this->property = $value;
    }    

    public function __get(string $property): mixed
    {
        {
            return $this->property;
        }
    }

    public function __sleep(): array
    {
        return array('name', 'surname', 'age');
    }

    public function __wakeup(): void 
    {
        $this->name;
        $this->surname;
        $this->age;
    }   

}
