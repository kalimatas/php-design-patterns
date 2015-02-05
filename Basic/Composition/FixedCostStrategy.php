<?php

namespace Basic\Composition;

class FixedCostStrategy extends CostStrategy
{
	public function cost(Lesson $lesson) {
		return 42;
	}

	public function chargeType() {
		return 'fixed';
	}
}
