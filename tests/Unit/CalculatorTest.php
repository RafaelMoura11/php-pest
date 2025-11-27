<?php

use App\Services\Calculator;

test('soma dois números', function () {
    $calc = new Calculator();

    expect($calc->sum(2, 3))->toBe(5);
});

test('subtrai dois números', function () {
    $calc = new Calculator();

    expect($calc->subtract(10, 4))->toBe(6);
});

test('multiplica dois números', function () {
    $calc = new Calculator();

    expect($calc->multiply(3, 5))->toBe(15);
});

test('divide dois números', function () {
    $calc = new Calculator();

    expect($calc->divide(10, 2))->toBe(5);
});

test('não permite divisão por zero', function () {
    $calc = new Calculator();

    $calc->divide(10, 0);
})->throws(InvalidArgumentException::class);
