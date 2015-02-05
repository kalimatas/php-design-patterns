<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Generation\Singleton\Preferences;

$pref = Preferences::getInstance();
$pref->setProperty('test', 42);

unset($pref);

$pref = Preferences::getInstance();
print_r($pref->getProperty('test'));

echo PHP_EOL;
