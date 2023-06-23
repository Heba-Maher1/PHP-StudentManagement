<?php
namespace Classes;

class Student
{
    // Properties
    static int $counter = 0 ;
    private readonly int $id;
    private $name;
    private $email;
    private array $courses;

    // Constructor
    public function __construct($name, $email, Course ...$courses)
    {
        $this->id = self::$counter;
        $this->name = $name;
        $this->email = $email;
        $this->courses = $courses;
        self::$counter++;
    }

    // Getter function
    public function getName(): string
    {
        return $this->name;
    }
    public function getID(): int
    {
        return $this->id;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getCourses(): array
    {
        return $this->courses;
    }

    // Setter function
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    // Add Courses
    public function addCourse(Course $course)
    {
        $this->courses[] = $course;
    }
}
