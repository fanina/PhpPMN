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
        $students = array(function ($classes){
            foreach($this->classes as $classe){return $classe->student->all();}
        });

        foreach($students as $student)
        {
            $this->note = new Note(rand(0,20),"");
            $this->note->defineRating($this->note->getNote());
            $note = $this->note->getRating();
            print " safae est : $note   " ;
            array_push($this->arrayMap_studentsNote, array($student => $this->note));
            //$this->arrayMap_studentsNote[] = array($student => $this->note);
        }

        return $this->arrayMap_studentsNote;
    }

}