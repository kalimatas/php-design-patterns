<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Basic\Composition\Lecture;
use Basic\Composition\Seminar;
use Basic\Composition\FixedCostStrategy;
use Basic\Composition\TimedCostStrategy;

$lecture = new Lecture(10, new FixedCostStrategy());
$seminar = new Seminar(20, new TimedCostStrategy());

echo $lecture->chargeType() . PHP_EOL;
echo $lecture->cost() . PHP_EOL;

echo $seminar->chargeType() . PHP_EOL;
echo $seminar->cost() . PHP_EOL;

echo PHP_EOL;

