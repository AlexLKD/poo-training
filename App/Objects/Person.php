<?php

namespace App\Objects {


    class Person
    {
        protected string $lastName = "";
        protected string $firstName = "";
        protected School $school;

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
    }
}
