<?php declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass('FizzBuzz')]
class FizzBuzzTest extends TestCase
{
    public function test_returns_an_error_if_input_is_negative_integer(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $sut = new FizzBuzz;
        $sut->calculate(-1);
    }

    #[DataProvider('useCaseProvider')]
    public function test_it_calculates_fizzbuzz_inputs(
        int $input,
        string $expected
    ): void
    {
        $sut = new FizzBuzz;
        $result = $sut->calculate($input);
        $this->assertEquals($expected, $result);
    }

    public static function useCaseProvider(): array
    {
        return [
            'it returns one given one' => [1, "1"],
            'it returns two given two' => [2, "2"],
            'it returns Fizz given three' => [3, "Fizz"],
            'it returns Buzz given five' => [5, "Buzz"],
            'it returns FizzBuzz given fifteen' => [15, "FizzBuzz"],
            'it returns Bar given seven' => [7, "Bar"],
            'it returns FizzBuzzBar given one hundred and five' => [105, "FizzBuzzBar"],
        ];
    }
}
