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

//     class Student
//     {
//         private string $lastName = "";
//         private string $firstName = "";
//         private School $school;
//         private string $graduation = "";

//         public function __construct(string $lastName, string $firstName, School $school, string $graduation)
//         {
//             $this->lastName = $lastName;
//             $this->firstName = $firstName;
//             $this->school = $school;
//             $this->graduation = $graduation;
//         }

//         public function getLastName(): string
//         {
//             return $this->lastName;
//         }

//         public function setLastName(string $lastName): void
//         {
//             $this->lastName = $lastName;
//         }

//         public function getFirstName(): string
//         {
//             return $this->firstName;
//         }

//         public function setFirstName(string $firstName): void
//         {
//             $this->firstName = $firstName;
//         }

//         public function getSchool(): School
//         {
//             return $this->school;
//         }

//         public function setSchool(School $school): void
//         {
//             $this->school = $school;
//         }

//         public function getGraduation(): string
//         {
//             return $this->graduation;
//         }

//         public function setGraduation(string $graduation): void
//         {
//             $this->graduation = $graduation;
//         }
//     }

//     class Teacher
//     {
//         private string $lastName = "";
//         private string $firstName = "";
//         private School $school;
//         private array $subjects = [];

//         public function __construct(string $lastName, string $firstName, School $school)
//         {
//             $this->lastName = $lastName;
//             $this->firstName = $firstName;
//             $this->school = $school;
//         }

//         public function getLastName(): string
//         {
//             return $this->lastName;
//         }

//         public function setLastName(string $lastName): void
//         {
//             $this->lastName = $lastName;
//         }

//         public function getFirstName(): string
//         {
//             return $this->firstName;
//         }

//         public function setFirstName(string $firstName): void
//         {
//             $this->firstName = $firstName;
//         }

//         public function getSchool(): School
//         {
//             return $this->school;
//         }

//         public function setSchool(School $school): void
//         {
//             $this->school = $school;
//         }

//         public function getSubjects(): array
//         {
//             return $this->subjects;
//         }

//         public function setSubjects(array $subjects): void
//         {
//             $this->subjects = $subjects;
//         }

//         public function addSubject(string $subject): void
//         {
//             $this->subjects[] = $subject;
//         }

//         public function removeSubject(string $subject): void
//         {
//             $index = array_search($subject, $this->subjects);
//             if ($index !== false) {
//                 unset($this->subjects[$index]);
//             }
//         }

//         public function __toString(): string
//         {
//             return 'Bonjour, je m\'appelle ' . $this->firstName . ' ' . $this->lastName . ' et j\'enseigne à l\'école ' . $this->school->getSchoolName() .
//                 ' les matières suivantes: ' . implode(', ', $this->subjects) . '.';
//         }
//     }
// }

// $primarySchool = new App\Objects\School("Ecole Primaire", "Paris");
// $middleSchool = new App\Objects\School("Collège Saint-Exupéry", "Lyon");
// $highSchool = new App\Objects\School("Lycée Victor Hugo", "Marseille");

// $firstStudent = new App\Objects\Student("Dupont", "Jean", $primarySchool, "CM1");
// $secondStudent = new App\Objects\Student("Martin", "Soph
