<?php


use Room\models\Student;
use Room\core\Classe;
use Room\models\Teacher;
use Room\core\Exam;

require __DIR__.'/vendor/autoload.php';


$studentSafae = new Student("rang");
$studentSafae->setFName("safae");

$studentSamya = new Student("rang");
$studentSamya->setFName("samya");


$classe = new Classe(new Teacher("speciality"),...[
        $studentSafae,
        $studentSamya,

]);


echo ' '.$classe->getCountStudent()."<br>\n";

$sessionExam = new Exam(...[
    $classe,
]);

$arrayElevesNotes = $sessionExam->rateExam($classe);

