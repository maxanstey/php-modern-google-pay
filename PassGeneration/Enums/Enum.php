<?php

namespace PassGeneration\Enums;

use ReflectionClass;

abstract class Enum
{
    public static function all(): array
    {
        $reflector = new ReflectionClass(static::class);
        $response = [];

        foreach ($reflector->getConstants() as $key => $value) {
            $response[$key] = $value;
        }

        return $response;
    }

    public static function values(): array
    {
        return array_values(self::all());
    }

    public static function isValid(string $enum): bool
    {
        return in_array($enum, self::all());
    }
}
