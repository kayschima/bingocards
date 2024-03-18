<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\RandomBingoNumbers;

Route::get('/', function () {
    $final = [];

    $final = array_merge($final, RandomBingoNumbers::generateRandomNumber(1, 15, 5));
    $final = array_merge($final, RandomBingoNumbers::generateRandomNumber(16, 30, 5));
    $final = array_merge($final, RandomBingoNumbers::generateRandomNumber(31, 45, 5));
    $final = array_merge($final, RandomBingoNumbers::generateRandomNumber(46, 60, 5));
    $final = array_merge($final, RandomBingoNumbers::generateRandomNumber(61, 75, 5));

    return view('welcome', [
        'numbers' => $final
    ]);
});
