<?php

namespace Corporate\command;

use Corporate\controller\Request;
use Corporate\command\DefaultCommand;
use Corporate\command\OneCommand;

class CommandResolver
{
	/**
	 * @param Request $request
	 *
	 * @return Command
	 */
	public function getCommand(Request $request) {
		$cmd = $request->getProperty('cmd');
		switch ($cmd) {
			case 'one':
				return new OneCommand();
				break;
			default:
				$request->addFeedback(sprintf('unknown command %s', $cmd));
				return new DefaultCommand();
				break;
		}
	}
}
