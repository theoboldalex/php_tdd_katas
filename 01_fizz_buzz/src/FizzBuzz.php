<?php declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class FizzBuzz
{
    public function output(int $input): string
    {
        if (
            ($input <= 0 || $input > 15)
        ) {
            throw new InvalidArgumentException();
        }

        if ($input % 3 !== 0 && $input % 5 !== 0) {
            return (string) $input;
        }

        $out = '';

        if ($input % 3 === 0) {
            $out .= 'Fizz';
        }

        if ($input % 5 === 0) {
            $out .= 'Buzz';
        }

        return $out;
    }

}
