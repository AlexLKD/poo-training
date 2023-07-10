<?php

namespace App\Objects {

    use DateTime;


    // class Student
    // {
    //     private string $lastName = "";
    //     private string $firstName = "";
    //     public DateTime $birthdate;
    //     private string $graduation = "";
    //     private string $schoolName = "";
    //     public function __construct(string $lastName, string $firstName, string $graduation)
    //     {
    //         $this->lastName = $lastName;
    //         $this->firstName = $firstName;
    //         $this->graduation = $graduation;
    //     }
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
}
