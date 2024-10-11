<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    public function test_invalid_input(): void
    {
        $this->expectException(\ValueError::class);
        $invalid = new FizzBuzz(0);
        $valid = new FizzBuzz(1);
    }

    public function test_returns_number(): void
    {
        $fizzbuzz = new FizzBuzz(1);
        $this->assertEquals('1', strval($fizzbuzz));
    }

    public function test_multiple_of_three(): void
    {
        $fizzbuzz = new FizzBuzz(3);
        $this->assertEquals('Fizz', strval($fizzbuzz));
    }

    public function test_multiple_of_five(): void
    {
        $fizzbuzz = new FizzBuzz(5);
        $this->assertEquals('Buzz', strval($fizzbuzz));
    }

    public function test_multiple_of_three_and_five(): void
    {
        $fizzbuzz = new FizzBuzz(15);
        $this->assertEquals('FizzBuzz', strval($fizzbuzz));
    }
}
