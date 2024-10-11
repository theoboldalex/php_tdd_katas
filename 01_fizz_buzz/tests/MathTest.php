<?php declare(strict_types=1);

namespace App\Tests;

use App\Math;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(Math::class)]
class MathTest extends TestCase
{
    #[DataProvider('useCaseProvider')]
    public function test_is_divisible_by(
        int $dividend,
        int $divisor,
        bool $truthy
    ): void {
        $result = Math::isDivisbleBy($dividend, $divisor);
        $this->assertEquals($truthy, $result);
    }

    public static function useCaseProvider(): array
    {
        return [
            'it should return false if the divisor is zero' => [3, 0, false],
            'it should return true when the dividend is divisible by the divisor' => [3, 3, true],
            'it should return false when the dividend is not divisible by the divisor' => [4, 3, false],
        ];
    }
}
