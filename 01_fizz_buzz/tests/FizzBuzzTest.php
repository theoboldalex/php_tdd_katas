<?php declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
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

    #[DataProvider('singleFactorProvider')]
    public function test_number_with_single_factor(int $number, string $token): void
    {
        $fizzbuzz = new FizzBuzz($number);
        $this->assertEquals($token, strval($fizzbuzz));
    }

    /**
     * @param int[] $factors
     */
    #[DataProvider('multipleFactorProvider')]
    public function test_number_with_multiple_factors(array $factors, string $token): void
    {
        $fizzbuzz = new FizzBuzz(array_product($factors));
        $this->assertEquals($token, strval($fizzbuzz));
    }

    /**
     * @return array<array<int,string>>
     */
    public static function singleFactorProvider(): array
    {
        return [
            [1, '1'],
            [3, 'Fizz'],
            [5, 'Buzz'],
            [7, 'Bazz'],
        ];
    }

    /**
     * @return array<array<array<int>,string>>
     */
    public static function multipleFactorProvider(): array
    {
        return [
            [
                'factors' => [3, 5],
                'token' => 'FizzBuzz'
            ],
            [
                'factors' => [3, 7],
                'token' => 'FizzBazz'
            ],
            [
                'factors' => [5, 7],
                'token' => 'BuzzBazz'
            ],
            [
                'factors' => [3, 5, 7],
                'token' => 'FizzBuzzBazz'
            ],
        ];
    }
}
