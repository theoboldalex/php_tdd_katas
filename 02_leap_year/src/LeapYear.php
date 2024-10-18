<?php declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class LeapYear
{
    public function isLeapYear(int $year): bool
    {
        if ($year < 1) {
            throw new InvalidArgumentException("Number must be a positive number");
        }

        if ($year % 4 === 0 && $year % 100 !== 0 || $year % 400 === 0) {
            return true;
        }

        return false;
    }
}
