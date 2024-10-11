<?php declare(strict_types=1);

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
        return strval($this->number);
    }
}
