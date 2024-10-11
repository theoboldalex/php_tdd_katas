<?php declare(strict_types=1);

namespace App;

class Math
{
    public static function isDivisbleBy(int $dividend, int $divisor): bool
    {
        return $divisor === 0 ? 
            false : 
            $dividend % $divisor === 0;
    }
}