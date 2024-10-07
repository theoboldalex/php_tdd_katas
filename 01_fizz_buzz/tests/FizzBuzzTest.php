<?php declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

#[CoversNothing()]
class FizzBuzzTest extends TestCase
{
    public function test_the_truth(): void
    {
        $this->assertTrue(true);
    }
}
