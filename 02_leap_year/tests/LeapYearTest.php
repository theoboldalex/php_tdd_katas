<?php declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\LeapYear;

#[CoversClass(LeapYear::class)]
class LeapYearTest extends TestCase
{
    private LeapYear $LeapYear;

    public function setUp(): void
    {
        $this->LeapYear = new LeapYear();
    }

    #[DataProvider('yearProvider')]
   public function testLeapYearResult($year, $expected): void
   {
       $this->assertEquals($expected, $this->LeapYear->isLeapYear($year));
   }

    public static function yearProvider(): array
    {
        return [
            'year_not_divisible_by_4' => ['year' => 1997, 'expected' => false],
            'year_divisible_by_4' => ['year' => 1996, 'expected' => true],
            'year_divisible_by_400' => ['year' => 1600, 'expected' => true],
            'year_divisible_by_4_and_100_not_400' => ['year' => 1800, 'expected' => false],
        ];
    }

    public function testsErrorsWhenPassedNegativeInteger(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->LeapYear->isLeapYear(-1);
    }

}
