<?php

declare(strict_types=1);

namespace App;

use ValueError;

class FizzBuzz
{
    private int $number;

    public function __construct(int $number)
    {
        $this->setNumber($number);
    }

    public function __toString(): string
    {
        return $this->fizbuzzify($this->number);
    }

    public function setNumber(int $number): void
    {
        if ($number <= 0) {
            throw new ValueError('number must be a positive integer');
        }
        $this->number = $number;
    }

    public function fizbuzzify(int $number): string
    {
        $string = '';

        if ($number % 3 == 0) {
            $string .= 'Fizz';
        }
        if ($number % 5 == 0) {
            $string .= 'Buzz';
        }

        return $string ?: strval($number);
    }
}
