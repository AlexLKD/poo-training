<?php

namespace App\Objects;


class Person
{
    protected string $lastName = "";
    protected string $firstName = "";
    protected School $school;
    protected static $introduce = 'Bonjour, je m\'appelle ##firstname## ##lastname##';

    public function __construct(string $lastName, string $firstName, School $school)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->school = $school;
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

    public function getSchool(): School
    {
        return $this->school;
    }

    public function setSchool(School $school): void
    {
        $this->school = $school;
    }
    public function introduceMyself(): string
    {
        return self::getIntroduction([
            'firstname' => $this->firstName,
            'lastname' => $this->lastName
        ]);
    }
    public static function getIntroduction(array $datas): string
    {
        $search = array_map(fn ($v) => "##$v##", array_keys($datas));
        return str_replace($search, array_values($datas), static::$introduce);
    }
}
