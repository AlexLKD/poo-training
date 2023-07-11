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
    public static function getSupportedLevels(): array
    {
        return static::$supportedLevels;
    }
}
