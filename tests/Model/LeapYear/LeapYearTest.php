<?php

namespace App\Tests\Model\LeapYear;

use App\Model\LeapYear\LeapYear;
use PHPUnit\Framework\TestCase;

class LeapYearTest extends TestCase
{
    public function testLeapYear()
    {
        $leapYear = new LeapYear();

        // Test a leap year (e.g., 2020)
        $this->assertTrue($leapYear->isLeapYear(2020));
        //Test a non-leap year (e.g., 2021)
        $this->assertFalse($leapYear->isLeapYear(2021));

    }

    public function testDefaultYear()
    {
        $leapYear = new LeapYear();

        // By default, it should use the current year
        $currentYear = date('Y');
        $this->assertTrue($leapYear->isLeapYear());

        // You can also explicitly pass null to use the current year
        $this->assertTrue($leapYear->isLeapYear(null));

        // Test a non-leap year for the next year
        $this->assertFalse($leapYear->isLeapYear(+1));
    }
}