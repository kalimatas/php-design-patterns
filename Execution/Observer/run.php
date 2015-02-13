<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Execution\Observer\Login;
use Execution\Observer\LoggerObserver;

$login = new Login();
new LoggerObserver($login);

$login->handleLogin('test', 'pass');

echo PHP_EOL;

