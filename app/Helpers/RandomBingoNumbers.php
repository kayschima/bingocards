<?php

namespace App\Helpers;

class RandomBingoNumbers
{
    public static function generateRandomNumber($min, $max, $quantity): array
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
}
