<?php

declare(strict_types=1);

namespace Room\core;

use Room\models\Student;


class Classe
{
    public $student = [];

        public function __construct(Student ...$students)
    {
        $this->student = $students;
    }

    //get result 
    
    public function getCountStudent(): int
    {
        return sizeof($this->student);
    }

    public function getAllStudents()
    {

        echo "Les étudiants suivant sont dans la classe <br>\n";

        foreach($this->student as $student) {
            echo get_class($student).' : '.$student->getRang()."<br>\n";
        }

    }
}