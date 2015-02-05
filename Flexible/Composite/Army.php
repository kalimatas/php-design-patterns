<?php

namespace Flexible\Composite;

class Army
{
	/** @var Unit[] */
	private $units = array();

	public function addUnit(Unit $unit) {
		array_push($this->units, $unit);
	}

	public function bombardStrength() {
		$strength = 0;
		foreach ($this->units as $unit) {
			$strength += $unit->bombardStrength();
		}
		return $strength;
	}
}
