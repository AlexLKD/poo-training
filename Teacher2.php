<?php

namespace App\Objects;

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
