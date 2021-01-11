<?php


use Room\models\Student;
use Room\core\Classe;
use Room\models\Teacher;
use Room\core\Exam;

require __DIR__.'/vendor/autoload.php';


$student = new Student("rang");
$student->setFName("safae");

$classe = new Classe(new Teacher("speciality"),...[
        $student,

]);


echo $classe->getCountStudent();
echo $classe->getAllStudents();

$sessionExam = new Exam(...[
    $classe,
]);

$arrayElevesNotes = $sessionExam->rateExam($classe);

