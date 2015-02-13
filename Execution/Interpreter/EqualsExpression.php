<?php

namespace Execution\Interpreter;

class EqualsExpression extends OperatorExpression
{
	protected function doInterpret(InterpreterContext $context, $leftOpResult, $rightOpResult) {
		$context->replace($this, $leftOpResult == $rightOpResult);
	}
}
