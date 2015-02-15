<?php

namespace Execution\Visitor;

abstract class ArmyVisitor
{
	abstract public function visit(Unit $node);

	public function visitArcher(Archer $node) {
		$this->visit($node);
	}

	public function visitLaserCanon(LaserCanon $node) {
		$this->visit($node);
	}

	public function visitArmy(Army $node) {
		$this->visit($node);
	}
}
