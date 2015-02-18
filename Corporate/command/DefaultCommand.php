<?php

namespace Corporate\command;

use Corporate\controller\Request;

class DefaultCommand extends Command
{
	public function doExecute(Request $request) {
		$request->addFeedback('default command');
	}
}
