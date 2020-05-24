<?php

declare(strict_types=1);

namespace Ocelot\Calendar\Tests\Unit\Gregorian;

use Ocelot\Calendar\Gregorian\Month;
use PHPUnit\Framework\TestCase;

final class MonthTest extends TestCase
{
    public function test_first_day_of_month() : void
    {
        $month = Month::fromString('2020-01-01');

        $this->assertSame(1, $month->firstDay()->number());
    }

    public function test_last_day_of_month() : void
    {
        $month = Month::fromString('2020-01-01');

        $this->assertSame(31, $month->lastDay()->number());
    }
}