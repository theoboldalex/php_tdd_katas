<?php declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(FizzBuzz::class)]
class FizzBuzzTest extends TestCase
{
    protected function setUp(): void
    {
        $this->fizzBuzzInstance = new FizzBuzz();
    }

    public function testItThrowsAnExceptionWithInvalidArguments(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->fizzBuzzInstance->output(-1);
    }

    public function testItReturnsFizzForGivenList()
    {
        $list = [3, 6, 9];

        foreach ($list as $arg) {
            $result = $this->fizzBuzzInstance->output($arg);
            $this->assertEquals('Fizz', $result);
        }
    }

    public function testItReturnsBuzzForGivenList()
    {
        $list = [5, 10];

        foreach ($list as $arg) {
            $result = $this->fizzBuzzInstance->output($arg);
            $this->assertEquals('Buzz', $result);
        }
    }

    public function testItReturnsFizzBuzzForGivenNumber()
    {
        $result = $this->fizzBuzzInstance->output(15);
        $this->assertEquals('FizzBuzz', $result);
    }


    public function testItReturnsTheArgumentIfItDoesntMatchAnyConditions()
    {
        $arg = 2;
        $result = $this->fizzBuzzInstance->output($arg);

        $this->assertEquals((string) $arg, $result);
    }
}
