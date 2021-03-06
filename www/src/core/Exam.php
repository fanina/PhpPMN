<?php

declare(strict_types=1);

namespace Room\core;

use Room\core\Classe;
use Room\models\Student;
use Room\core\Note;
use Room\core\Evaluate;

class Exam implements Evaluate
{
    public $note;
    public $classes = [];
    public $arrayMap_studentsNote = [];


    public function __construct(Classe ...$classes)
    {
        $this->classes = $classes;
    }
    
    public function rateExam(Classe $classe): array
    {
        //$students = array(function ($classes){
          //  foreach($this->classes as $classe){return $classe->student->all();}
        //});
        $students = $classe-> getAllStudents();

        foreach($students as $student)
        {
            $this->note = new Note(rand(0,20),"");
            $this->note->defineRating($this->note->getNote());
            $rating = $this->note->getRating();
            $note = $this->note->getNote();
            $name = $student->getFName();
            echo "Les Notes de votre Exam : <br>\n";
            echo  $name.'  ==> Note = ' .$note.' , '.$rating."<br>\n" ;
            //array_push($this->arrayMap_studentsNote, array($student => $this->note));
            //$this->arrayMap_studentsNote[] = array($student => $this->note);
        }

        return $this->arrayMap_studentsNote;
    }

}