<?php


use Room\models\Student;
use Room\core\Classe;
use Room\models\Teacher;
use Room\core\Exam;

require __DIR__.'/vendor/autoload.php';


$student = new Student("rang");
$student->setFName("safae");
$teacher = new Teacher("teacher");

$classe = new Classe($teacher,...[
        $student,

]);


echo $classe->getCountStudent();
echo $classe->getAllStudents();

$sessionExam = new Exam(...[
    $classe,
]);

