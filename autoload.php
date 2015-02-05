<?php

spl_autoload_register(function($className) {
	$className = strtr($className, '\\', DIRECTORY_SEPARATOR);
	$fileName = $className . '.php';

	/** @noinspection PhpIncludeInspection */
	require_once $fileName;
});
