<?php

declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
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
}
