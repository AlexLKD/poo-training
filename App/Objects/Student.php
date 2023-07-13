<?php

namespace App\Objects;

use DateTime;

class Student extends Person
{
    private string $graduation = "";
    public DateTime $birthdate;
    protected static $introduce = 'Bonjour, je m\'appelle ##firstname## ##lastname## , j\'ai ##age## ans et je vais à l\'école ##schoolname## en classe de ##graduation##.';

    public function __construct(string $lastName, string $firstName, School $school, string $graduation)
    {
        parent::__construct($lastName, $firstName, $school);
        $this->graduation = $graduation;
    }

    public function getGraduation(): string
    {
        return $this->graduation;
    }
    public function setGraduation(string $graduation): bool
    {
        if ($this->school->supportsLevel($graduation)) {
            $this->graduation = $graduation;
            return true;
        }
        return false;
        // return $this->graduation = $graduation;
    }
    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }
    public function getAge(): int
    {
        $today = new DateTime;
        $this->birthdate;
        $age = $this->birthdate->diff($today)->y;
        return $age;
    }
    public function introduceMyself(): string
    {
        return self::getIntroduction([
            'firstname' => $this->firstName,
            'lastname' => $this->lastName,
            'age' => $this->getAge(),
            'schoolname' => $this->school->getSchoolName(),
            'graduation' => $this->graduation
        ]);
    }
    public function __toString()
    {
        return 'Bonjour, je m\'appelle ' . $this->firstName . ', j\'ai ' . $this->getAge() .
            ' ans et je vais à l\'école ' . $this->school->getSchoolName() . ' en classe de ' . $this->graduation . '.';
    }
}
