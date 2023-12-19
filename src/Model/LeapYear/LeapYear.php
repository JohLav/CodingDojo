<?php

namespace App\Model\LeapYear;

class LeapYear
{
    public function isLeapYear(int $year = null): bool
    {
        if (($year % 400) == 0 || (($year % 4) == 0 && ($year % 100) != 0)) {
            return true; // It's a leap year
        }
        return false; // It's not a leap year
    }
}