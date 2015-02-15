<?php

namespace Execution\Visitor;

abstract class CompositeUnit extends Unit
{
	/** @var Unit[] */
	private $units = array();

	public function getComposite() {
		return $this;
	}

	protected function units() {
		return $this->units;
	}

	public function addUnit(Unit $unit) {
		if (in_array($unit, $this->units, true)) {
			return;
		}
		$unit->setDepth($this->depth + 1);
		array_push($this->units, $unit);
	}

	public function removeUnit(Unit $unit) {
		$this->units = array_udiff($this->units, array($unit), function($a, $b) {
			return $a === $b ? 0 : 1;
		});
	}

	public function accept(ArmyVisitor $visitor) {
		parent::accept($visitor);

		foreach ($this->units as $unit) {
			$unit->accept($visitor);
		}
	}
}
