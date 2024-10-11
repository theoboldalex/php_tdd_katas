<?php

declare(strict_types=1);

namespace App;

use ValueError;

class FizzBuzz
{
    private int $number;

    private array $mappings = [
        3 => 'Fizz',
        5 => 'Buzz',
        7 => 'Bazz',
    ];

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

        foreach ($this->mappings as $divisor => $token) {
            if ($number % $divisor == 0) {
                $string .= $token;
            }
        }

        return $string ?: strval($number);
    }
}
