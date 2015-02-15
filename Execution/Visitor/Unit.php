<?php

namespace Execution\Visitor;

abstract class Unit
{
	protected $depth = 0;

	abstract public function bombardStrength();

	/**
	 * @return CompositeUnit
	 */
	public function getComposite() {
		return null;
	}

	public function accept(ArmyVisitor $visitor) {
		$method = "visit" . (new \ReflectionClass($this))->getShortName();
		$visitor->$method($this);
	}

	protected function setDepth($depth) {
		$this->depth = $depth;
	}

	public function getDepth() {
		return $this->depth;
	}
}
