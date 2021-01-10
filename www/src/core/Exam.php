<?php

declare(strict_types=1);

namespace Room;

use Room\Classe;
use Room\models\Student;
use Room\Note;

class Exam implements Evaluate
{
    public $note;
    public $classes = [];
    public $arrayMap_studentsNote = [];

    public function __construct(Classe ...$classes)
    {
        $this->classes = $classes;
    }
    
    private function rateExam(string $exam,Classe $classe): array
    {
        public $students = array(function ($classes) use($notes){
            foreach($this->classes as $classe){return $classe->student->all()}
        });
        foreach($students as $student)
        {
            $this->note = new Note(rand(0,20),"");
            array_push($this->arrayMap_studentsNote , $student => $this->note);
        }
        return $this->arrayMap_studentsNote;
    }
}