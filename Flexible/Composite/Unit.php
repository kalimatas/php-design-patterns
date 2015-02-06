<?php

namespace Flexible\Composite;

abstract class Unit
{
	abstract public function bombardStrength();

	/**
	 * @return CompositeUnit
	 */
	public function getComposite() {
		return null;
	}
}
