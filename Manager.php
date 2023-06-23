<?php

use Classes\Student;
use Classes\Course;
use Traits\Loggable;

class Manager
{
    use Loggable;

     private array $students;

    public function __construct()
    {
        $this->students = [];
    }

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
        $this->log('Successfuly added student '.$student->getName());
    }

    public function getStudent(int $id): ?Student {

        foreach ($this->students as $student) {
            if ($student->getID() === $id) {
                return $student;
            }
        }
        return null;
    }

    public function updateStudentDetails(Student $student , string $name , string $email)
    {
        $student->setName($name);
        $student->setEmail($name);
        $this->log('Successfuly updated student '.$student->getName());

    }

    public function deleteStudent(Student $student)
    {
        $key = array_search($student , $this->students);
        if($key !== false){
            unset($this->students[$key]);
        }
        $this->log('Successfuly deleted student '.$student->getName());

    }

    public function getStudentsArray(): array 
    {
        return $this->students;
    }
}
