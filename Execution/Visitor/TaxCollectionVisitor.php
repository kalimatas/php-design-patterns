<?php

namespace Execution\Visitor;

class TaxCollectionVisitor extends ArmyVisitor
{
	private $due = 0;
	private $report = "";

	public function visit(Unit $node) {
		$this->levy($node, 1);
	}

	public function visitArcher(Archer $node) {
		$this->levy($node, 2);
	}

	public function visitLaserCanon(LaserCanon $node) {
		$this->levy($node, 5);
	}

	private function levy(Unit $unit, $amount) {
		$this->report .= "Tax for " . (new \ReflectionClass($unit))->getShortName();
		$this->report .= ": $amount" . PHP_EOL;
		$this->due += $amount;
	}

	public function getReport() {
		return $this->report;
	}

	public function getTax() {
		return $this->due;
	}
}
