<?php

namespace Classes;

class Course
{
    static int $counter = 0 ;
    private readonly int $id;
    private $name;

    public function __construct($name)
    {
        $this->id = self::$counter;
        $this->name = $name;
        self::$counter++;
        
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getID(): int
    {
        return $this->id;
    }

}
