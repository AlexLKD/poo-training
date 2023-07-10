<?php

namespace App\Objects {

    class School
    {
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
    }
    class PrimarySchool extends School
    {
        protected array $supportedLevels = ["CP", "CE1", "CE2", "CM1", "CM2"];
        public function __construct(string $schoolName, string $schoolCity)
        {
            parent::__construct($schoolName, $schoolCity);
        }
        public function getSupportedLevels(): array
        {
            return $this->supportedLevels;
        }

        public function setSupportedLevels(array $levels): void
        {
            $this->supportedLevels = $levels;
        }
        public function supportsLevel(string $level): bool
        {
            return in_array($level, $this->supportedLevels);
        }
    }

    class MiddleSchool extends School
    {
        private array $supportedLevels = ["6ème", "5ème", "4ème", "3ème"];

        public function getSupportedLevels(): array
        {
            return $this->supportedLevels;
        }

        public function setSupportedLevels(array $levels): void
        {
            $this->supportedLevels = $levels;
        }
        public function supportsLevel(string $level): bool
        {
            return in_array($level, $this->supportedLevels);
        }
    }

    class HighSchool extends School
    {
        private array $supportedLevels = ["Seconde", "Première", "Terminale"];

        public function getSupportedLevels(): array
        {
            return $this->supportedLevels;
        }

        public function setSupportedLevels(array $levels): void
        {
            $this->supportedLevels = $levels;
        }
        public function supportsLevel(string $level): bool
        {
            return in_array($level, $this->supportedLevels);
        }
    }
}


namespace App\Objects {
}
