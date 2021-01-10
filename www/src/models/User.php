<?php
declare(strict_types=1);

namespace Room\models;

abstract class User
{
    protected $fName;
    protected $lName;
    protected $mail;

    public function __construct(string $nom , string $prenom , string $email)
    {
        $this->fName = $nom;
        $this->lName = $prenom;
        $this->mail = $email;
    }

    public function getFName() : string
    {
        return $this->fName;
    }

    public function getLName() : string
    {
        return $this->LName;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setFName(string $fName)
    {
        $this->fName = $fName;
    }

    public function setLName(string $lName)
    {
        $this->lName = $lName;
    }

    public function setEmail(string $mail)
    {
        $this->email = $mail;
    }

}