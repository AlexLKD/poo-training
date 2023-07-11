<?php

namespace App\Objects;

class School
{
    protected static array $supportedLevels = [];

    protected string $schoolName = "";
    protected string $schoolCity = "";

    public function __construct(string $schoolName, string $schoolCity)
    {
        $this->schoolName = $schoolName;
        $this->schoolCity = $schoolCity;
    }
    public function getSchoolName(): string
    {
        return $this->schoolName;
    }
    public function setSchoolName(string $schoolName): void
    {
        $this->schoolName = $schoolName;
    }

    public function getSchoolCity(): string
    {
        return $this->schoolCity;
    }

    public function setSchoolCity(string $schoolCity): void
    {
        $this->schoolCity = $schoolCity;
    }
    public static function supportsLevel(string $level): bool
    {
        return in_array($level, static::$supportedLevels);
    }
    public static function getSupportedLevels(): array
    {
        return static::$supportedLevels;
    }
}




class Person
{
    protected string $lastName = "";
    protected string $firstName = "";
    protected string $schoolName = "";

    public function __construct(string $lastName, string $firstName)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getSchoolName(): string
    {
        return $this->schoolName;
    }

    public function setSchoolName(string $schoolName): void
    {
        $this->schoolName = $schoolName;
    }
}




class Teacher extends Person
{
    private array $subjects = [];

    public function __construct(string $lastName, string $firstName)
    {
        parent::__construct($lastName, $firstName);
    }

    public function getSubjects(): array
    {
        return $this->subjects;
    }
    public function setSubjects(string $subject): void
    {
        $this->subjects[] = $subject;
    }
    public function removeSubject(string $subject): void
    {
        $index = array_search($subject, $this->subjects);
        if ($index !== false) {
            unset($this->subjects[$index]);
        }
    }
    public function displaySubjects(): string
    {
        return implode(", ", $this->subjects);
    }
    public function __toString()
    {
        return 'Bonjour, je m\'appelle ' . $this->firstName . ' et j\'enseigne à l\'école ' . $this->schoolName .
            ' les matières suivantes: ' . $this->displaySubjects() . '.';
    }
}




use DateTime;

class Student extends Person
{
    private string $graduation = "";
    public DateTime $birthdate;

    public function __construct(string $lastName, string $firstName, string $graduation)
    {
        parent::__construct($lastName, $firstName);
        $this->graduation = $graduation;
    }

    public function getGraduation(): string
    {
        return $this->graduation;
    }
    public function setGraduation(string $graduation): bool
    {
        return $this->graduation = $graduation;
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
    public function __toString()
    {
        return 'Bonjour, je m\'appelle ' . $this->firstName . ', j\'ai ' . $this->getAge() .
            ' ans et je vais à l\'école ' . $this->schoolName . ' en classe de ' . $this->graduation . '.';
    }
}
