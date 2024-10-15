<?php declare(strict_types=1);

namespace App;

class FizzBuzz
{
    public function fizzBuzz(int $number) : string {
        return ($number % 7 === 0 && $number % 5 === 0 && $number % 3 === 0) ? 'FizzBuzzBar' :
                    (($number % 5 === 0 && $number % 3 === 0) ? 'FizzBuzz' :
                        ($number % 3 === 0 ? "Fizz" :
                            ($number % 5 === 0 ? "Buzz" :
                                ($number % 7 === 0 ? "Bar" : "")
                            )
                        )
                    );
    }
}
