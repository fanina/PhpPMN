<?php


use Room\models\Student;
use Room\core\Classe;

require __DIR__.'/vendor/autoload.php';


$student = new Student("rang");
$student->setFName("safae");


$classe = new Classe(...[
        $student,
        
    ]);


echo $classe->getCountStudent();
echo $classe->getAllStudents();