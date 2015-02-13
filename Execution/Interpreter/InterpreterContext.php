<?php

namespace Execution\Interpreter;

class InterpreterContext
{
	private $expressions = array();

	public function replace(Expression $exp, $value) {
		$this->expressions[$exp->getKey()] = $value;
	}

	public function lookup(Expression $exp) {
		return $this->expressions[$exp->getKey()];
	}
}
