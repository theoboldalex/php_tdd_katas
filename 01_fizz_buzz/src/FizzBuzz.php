<?php declare(strict_types=1);

namespace App;


use InvalidArgumentException;

class FizzBuzz
{
    public function fizzBuzz(int $number) : string
    {
        if ($number < 1) {
            throw new InvalidArgumentException("Number must be a positive number");
        }

        if ($number % 15 === 0) {
            return "FizzBuzz";
        } else if ($number % 3 === 0) {
            return 'Fizz';
        } else if ($number % 5 === 0) {
            return 'Buzz';
        } else {
            return (string)$number;
        }
    }
}
