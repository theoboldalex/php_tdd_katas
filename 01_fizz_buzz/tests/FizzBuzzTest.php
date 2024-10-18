<?php declare(strict_types=1);
namespace App\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

#[CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    public FizzBuzz $fizzBuzz;

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->fizzBuzz = new FizzBuzz();
    }

    public function test_returns_string(): void
    {
        $this->assertIsString($this->fizzBuzz->fizzBuzz(9999));
    }

    public function test_returns_string_of_integer_when_passed_1(): void
    {
        $this->assertEquals('1', $this->fizzBuzz->fizzBuzz(1));
    }

    public function test_returns_string_of_integer_when_passed_2(): void
    {
        $this->assertEquals('2', $this->fizzBuzz->fizzBuzz(2));
    }

    public function test_returns_fizz_when_divisible_by_3(): void
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->fizzBuzz(3));
    }

    public function test_returns_buzz_when_divisible_by_5(): void
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->fizzBuzz(5));
    }

    public function test_return_fizzbuzz_when_divisible_by_3_and_5(): void
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->fizzBuzz(15));
    }

    public function tests_errors_when_passed_negative_integer(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->fizzBuzz->fizzBuzz(-1);
    }
}
