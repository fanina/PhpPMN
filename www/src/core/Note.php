<?php

declare(strict_types=1);

namespace Room;

class Note
{
    private $note = 0 ;
    private $rating;

    public function __construct(float $note, string $rating)
    {
        $this->note = $note;
        $this->rating = $rating;
    }

    public function getNote(): int
    {
        return $this->note;
    }

    public function setNote(int $note)
    {
        $this->note = $note;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function setRating(string $rating)
    {
        $this->rating = $rating;
    }

    public function defineRating($note)
    {
        switch ($note) {
            case 0:
                echo "Student is Absent";
                $this->rating = "Absent";
                break;
            case 20:
                $this->rating = "Excellent Work";
                break;
        }
        if ($note < 14 && $note > 10 )
        {
            $this->rating = "Good";
        }
        if ($note < 20 && $note > 16 )
        {
            $this->rating = "Very Good";
        }
    }

}