<?php

namespace App\Objects {


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
}
