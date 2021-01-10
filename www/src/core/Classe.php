<?php

declare(strict_types=1);

namespace Room\core;

use Room\models\Student;
use Room\models\Teacher;


class Classe
{
    public $student = [];
    public $teacher;

        public function __construct( Teacher $teacher , Student ...$students)
    {
        $this->teacher = $teacher;
        $this->student = $students;
    }

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