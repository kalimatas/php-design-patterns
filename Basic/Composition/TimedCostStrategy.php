<?php

namespace Basic\Composition;

class TimedCostStrategy extends CostStrategy
{
	public function cost(Lesson $lesson) {
		return $lesson->getDuration() * 42;
	}

	public function chargeType() {
		return 'timed';
	}
}
