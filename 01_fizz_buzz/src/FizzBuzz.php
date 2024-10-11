<?php declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class FizzBuzz
{
    private const RESULT_MAP = [
        3 => 'Fizz',
        5 => 'Buzz',
        7 => 'Bar'
    ];

    public function calculate(int $number = 1): string
    {
        if ($number < 1) {
            throw new InvalidArgumentException('Argument must be a positive integer. Given: ' . $number);
        }

        $result = null;

        foreach (self::RESULT_MAP as $index => $resultPart) {
            if (Math::isDivisbleBy($number, $index)) {
                $result .= $resultPart;
            }
        }

        return $result ?? (string) $number;
    }
}
