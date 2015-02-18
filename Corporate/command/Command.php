<?php

namespace Corporate\command;

use Corporate\controller\Request;

abstract class Command
{
	public final function __construct() {}

	public function execute(Request $request) {
		$this->doExecute($request);
	}

	abstract public function doExecute(Request $request);
}
