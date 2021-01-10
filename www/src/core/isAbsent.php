<?php

declare(strict_types=1);

namespace Room;

use Room\User\Student;

class IsAbsent extends \Exception
{
    private $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
        echo "The student is absent in Exam.";
    }
}