<?php
declare(strict_types=1);

use Room\models\User;

namespace Room\models;

final class Student extends User
{
    private $rang ;

    public function __construct(string $rang)
    {
        echo "Je suis un eleve";
        $this->rang = $rang;

    }

    public function getRang() : String
    {
        return $this->rang;
    }

    public function setRang(string $rang)
    {
        $this->rang = $rang ;
    }
}