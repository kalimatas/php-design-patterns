<?php

namespace Execution\Interpreter;

abstract class Expression
{
	private static $keyCount = 0;
	private $key = null;

	abstract public function interpret(InterpreterContext $context);

	public function getKey() {
		if ($this->key === null) {
			self::$keyCount++;
			$this->key = self::$keyCount;
		}
		return $this->key;
	}
}
