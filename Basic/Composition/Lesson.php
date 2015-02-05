<?php

namespace Basic\Composition;

abstract class Lesson
{
	private $duration;
	private $strategy;

	public function __construct($duration, CostStrategy $strategy) {
		$this->duration = $duration;
		$this->strategy = $strategy;
	}

	public function cost() {
		return $this->strategy->cost($this);
	}

	public function chargeType() {
		return $this->strategy->chargeType();
	}

	public function getDuration() {
		return $this->duration;
	}
}
