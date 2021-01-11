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
        echo "Nombre d'etudiant dans cette classe est :   " ;
        return sizeof($this->student);
    }

    public function getAllStudents() : array
    {

        echo "Les étudiants suivant sont dans la classe <br>\n";
        $allstudents = null;
        foreach($this->student as $student) {
            echo 'A : '.$student->getFName()."<br>\n";
            $allstudents[] = $student;
        }
        return $allstudents;

    }
}