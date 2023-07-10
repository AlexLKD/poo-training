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
    public static function supportsLevel(string $level): bool
    {
        return in_array($level, static::$supportedLevels);
    }
}

class PrimarySchool extends School
{
    public static array $supportedLevels = ["CP", "CE1", "CE2", "CM1", "CM2"];
}

class MiddleSchool extends School
{
    protected  static array $supportedLevels = ["6ème", "5ème", "4ème", "3ème"];
}

class HighSchool extends School
{
    protected  static array $supportedLevels = ["Seconde", "Première", "Terminale"];
}
