<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Execution\Visitor\Army;
use Execution\Visitor\Archer;
use Execution\Visitor\LaserCanon;
use Execution\Visitor\TextDumpArmyVisitor;
use Execution\Visitor\TaxCollectionVisitor;

$main = new Army();
$main->addUnit(new Archer());
$main->addUnit(new LaserCanon());
$main->addUnit(new LaserCanon());

$second = new Army();
$main->addUnit($second);
$second->addUnit(new Archer());
$second->addUnit(new Archer());

$textDump = new TextDumpArmyVisitor();
$main->accept($textDump);

print_r($textDump->getText());

echo PHP_EOL;

$taxCollector = new TaxCollectionVisitor();
$main->accept($taxCollector);

print_r($taxCollector->getReport());
print_r("total: " . $taxCollector->getTax());

echo PHP_EOL;
