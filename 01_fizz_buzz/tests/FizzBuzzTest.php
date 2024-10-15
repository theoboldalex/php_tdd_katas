<?php declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversNothing()]
class FizzBuzzTest extends TestCase
{
    public function test_the_truth(): void
    {
        $this->assertTrue(true);
    }

    #[DataProvider('ValidationProvider')]
    public function test_is_divisible_test(
        string $expected,
        int $value
    ) : void {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($expected, $fizzBuzz->FizzBuzz($value));
    }


    public static function validationProvider(): array
    {
        return [
            'not divisible' => [
              '',
                1
            ],
            'divisible by 3' => [
                'Fizz',
                3
            ],
            'divisible by 5' => [
                'Buzz',
                5
            ],
            'divisible by 7' => [
                'Bar',
                7
            ],
            'divisible by 5 and 3' => [
                'FizzBuzz',
                15
            ],
            'divisible by 3, 5 and 7' => [
                'FizzBuzzBar',
                105
            ]
        ];
    }
}
