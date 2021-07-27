<?php

namespace PassGeneration\Jwt\Enums;

use PassGeneration\VerticalTypes\Enums\VerticalType;
use PassGeneration\Enums\Enum;
use InvalidArgumentException;
use ReflectionClass;

class JwtKey extends Enum
{
    public const OFFER = 'offerObjects';
    public const EVENT_TICKET = 'offerObjects';
    public const FLIGHT = 'offerObjects';
    public const BOARDING_PASS = 'offerObjects';
    public const GIFT_CARD = 'offerObjects';
    public const LOYALTY = 'offerObjects';
    public const TRANSIT = 'offerObjects';

    public static function byVerticalType(int $verticalType)
    {
        $reflector = new ReflectionClass(VerticalType::class);

        foreach ($reflector->getConstants() as $key => $value) {
            if ($verticalType === $value) {
                return self::all()[$key];
            }
        }

        // TODO:
        throw new InvalidArgumentException();
    }
}
