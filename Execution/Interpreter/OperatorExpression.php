<?php

namespace Execution\Interpreter;

abstract class OperatorExpression extends Expression
{
	/** @var Expression */
	protected $leftOp;
	/** @var Expression */
	protected $rightOp;

	public function __construct(Expression $leftOp, Expression $rightOp) {
		$this->leftOp = $leftOp;
		$this->rightOp = $rightOp;
	}

	public function interpret(InterpreterContext $context) {
		$this->leftOp->interpret($context);
		$this->rightOp->interpret($context);

		$leftOpResult = $context->lookup($this->leftOp);
		$rightOpResult = $context->lookup($this->rightOp);

		$this->doInterpret($context, $leftOpResult, $rightOpResult);
	}

	abstract protected function doInterpret(InterpreterContext $context, $leftOpResult, $rightOpResult);
}
