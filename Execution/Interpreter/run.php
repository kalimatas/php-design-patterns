<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Execution\Interpreter\InterpreterContext;
use Execution\Interpreter\LiteralExpression;
use Execution\Interpreter\VariableExpression;
use Execution\Interpreter\BooleanOrExpression;
use Execution\Interpreter\EqualsExpression;

$context = new InterpreterContext();
$exp = new LiteralExpression('42');
$exp->interpret($context);

echo $context->lookup($exp) . PHP_EOL;

$var1 = new VariableExpression('input', 'value');
$var1->interpret($context);

echo $context->lookup($var1) . PHP_EOL;

$var2 = new VariableExpression('input');
$var2->interpret($context);

echo $context->lookup($var2) . PHP_EOL;

$var1->setValue('new value');
$var1->interpret($context);

echo $context->lookup($var2) . PHP_EOL; // new value
echo PHP_EOL;

// ------

// $input equals "4" or $input equals "four"

$context = new InterpreterContext();
$input = new VariableExpression('input');

$statement = new BooleanOrExpression(
	new EqualsExpression($input, new LiteralExpression('four')),
	new EqualsExpression($input, new LiteralExpression('4'))
);

foreach (array(4, 'four', 'nope') as $val) {
	$input->setValue($val);

	printf("val: %s\n", $val);
	$statement->interpret($context);

	if ($context->lookup($statement)) {
		printf("yes\n");
	} else {
		printf("no\n");
	}
}

echo PHP_EOL;

