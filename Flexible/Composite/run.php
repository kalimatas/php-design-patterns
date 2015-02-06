<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Flexible\Composite\Army;
use Flexible\Composite\Archer;
use Flexible\Composite\LaserCanon;

$main = new Army();
$main->addUnit(new Archer());
$main->addUnit(new LaserCanon());

$sub = new Army();
$sub->addUnit(new Archer());
$sub->addUnit(new Archer());

$main->addUnit($sub);

print_r($main->bombardStrength());

echo PHP_EOL;
