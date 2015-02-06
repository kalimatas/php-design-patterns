<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Flexible\Decorator\DiamondDecorator;
use Flexible\Decorator\PollutionDecorator;
use Flexible\Decorator\Plains;

$tile = new DiamondDecorator(new Plains());
echo $tile->getWealthFactor() . PHP_EOL; // 4

$tile = new DiamondDecorator(new PollutionDecorator(new Plains()));
echo $tile->getWealthFactor() . PHP_EOL; // 0

echo PHP_EOL;
