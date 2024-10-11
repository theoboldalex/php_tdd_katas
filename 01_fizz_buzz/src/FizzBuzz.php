<?php

declare(strict_types=1);

namespace App;

class FizzBuzz
{
    public int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function __toString(): string
    {
        return $this->fizbuzzify($this->number);
    }

    public function fizbuzzify(int $number): string
    {
        if ($number % 3 == 0) {
            return 'Fizz';
        }
        return strval($number);
    }
}
