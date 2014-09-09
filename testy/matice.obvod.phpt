<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/matice.php';

use Tester\Assert;
Tester\Environment::setup();

$hardMatice4x4 = [
	[8, 1, 4, 5],
	[5, 3, 5, 7],
	[9, 2, 6, 1],
	[7, 4, 5, 3]
];

$matice = new Matice($hardMatice4x4);

Assert::same(59, $matice::obvod());