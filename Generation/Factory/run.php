<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Generation\Factory\BloggsCommsManager;

$com = new BloggsCommsManager();
$e = $com->getAppEncoder();

echo $com->getHeaderText();
echo $e->encode();
echo $com->getFooterText();

echo PHP_EOL;
