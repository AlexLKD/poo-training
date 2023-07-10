<?php

// namespace App\Objects {

//     class School
//     {
//         protected string $schoolName = "";
//         protected string $schoolCity = "";


//         public function __construct(string $schoolName, string $schoolCity)
//         {
//             $this->schoolName = $schoolName;
//             $this->schoolCity = $schoolCity;
//         }
//         public function getSchoolName(): string
//         {
//             return $this->schoolName;
//         }

//         public function setSchoolName(string $schoolName): void
//         {
//             $this->schoolName = $schoolName;
//         }
//         public function getSchoolCity(): string
//         {
//             return $this->schoolCity;
//         }

//         public function setSchoolCity(string $schoolCity): void
//         {
//             $this->schoolCity = $schoolCity;
//         }
//     }
//     class PrimarySchool extends School
//     {
//         protected static array $supportedLevels = ["CP", "CE1", "CE2", "CM1", "CM2"];

//         public static function getSupportedLevels(): array
//         {
//             return self::$supportedLevels;
//         }

//         public function supportsLevel(string $level): bool
//         {
//             return in_array($level, self::$supportedLevels);
//         }
//     }

//     class MiddleSchool extends School
//     {
//         protected static array $supportedLevels = ["6ème", "5ème", "4ème", "3ème"];

//         public static function getSupportedLevels(): array
//         {
//             return self::$supportedLevels;
//         }

//         public function supportsLevel(string $level): bool
//         {
//             return in_array($level, self::$supportedLevels);
//         }
//     }

//     class HighSchool extends School
//     {
//         protected static array $supportedLevels = ["Seconde", "Première", "Terminale"];

//         public static function getSupportedLevels(): array
//         {
//             return self::$supportedLevels;
//         }

//         public function supportsLevel(string $level): bool
//         {
//             return in_array($level, self::$supportedLevels);
//         }
//     }
// }
