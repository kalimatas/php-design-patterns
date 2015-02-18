<?php

namespace Corporate\command;

use Corporate\controller\Request;

class OneCommand extends Command
{
	public function doExecute(Request $request) {
		$request->addFeedback('one command');
	}
}
