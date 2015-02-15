<?php

namespace Execution\Visitor;

class TextDumpArmyVisitor extends ArmyVisitor
{
	protected $text;

	public function visit(Unit $node) {
		$ret = "";
		$pad = 4 * $node->getDepth();

		$ret .= sprintf("%{$pad}s", "");
		$ret .= (new \ReflectionClass($node))->getShortName() . ": ";
		$ret .= "Bombard strength: " . $node->bombardStrength() . PHP_EOL;

		$this->text .= $ret;
	}

	public function getText() {
		return $this->text;
	}
}
