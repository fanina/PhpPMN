<?php
declare(strict_types=1);

use Room\models\User;

namespace Room\models\Teacher;

class Teacher extends User
{
    private $speciality;

    public function __construct(string $speciality)
    {
        $this->speciality = $speciality;
    }

    public function getSpeciality(): string
    {
        return $this->speciality;
    }

    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;
    }

}