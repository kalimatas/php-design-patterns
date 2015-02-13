<?php

namespace Execution\Interpreter;

class BooleanOrExpression extends OperatorExpression
{
	protected function doInterpret(InterpreterContext $context, $leftOpResult, $rightOpResult) {
		$context->replace($this, $leftOpResult || $rightOpResult);
	}
}
