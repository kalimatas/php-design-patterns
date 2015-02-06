<?php

namespace Flexible\Decorator;

class DiamondDecorator extends TileDecorator
{
	public function getWealthFactor() {
		return $this->tile->getWealthFactor() + 2;
	}
}
