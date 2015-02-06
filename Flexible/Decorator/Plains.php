<?php

namespace Flexible\Decorator;

class Plains extends Tile
{
	private $wealthFactory = 2;

	public function getWealthFactor() {
		return $this->wealthFactory;
	}
}
