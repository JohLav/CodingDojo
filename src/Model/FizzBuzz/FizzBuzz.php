<?php

namespace App\Model\FizzBuzz;

class FizzBuzz
{
    public function oneToHundred(int $number): string
    {
        // Write a program that prints the numbers from 1 to 100.
        // But for multiples of three print “Fizz” instead of the number and
        // for the multiples of five print “Buzz”.
        // For numbers which are multiples of both three and five print “FizzBuzz “.

        if (($number % 5) == 0) {
            return "Buzz";
        } elseif (($number % 3) == 0) {
            return "Fizz";
        } elseif (($number % 5) == 0 && ($number % 3) == 0) {
            return "FizzBuzz";
        }
        return $number;
    }
}