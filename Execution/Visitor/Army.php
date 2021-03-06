<?php

namespace Execution\Visitor;

class Army extends CompositeUnit
{
	public function bombardStrength() {
		$strength = 0;
		foreach ($this->units() as $unit) {
			$strength += $unit->bombardStrength();
		}
		return $strength;
	}
}
