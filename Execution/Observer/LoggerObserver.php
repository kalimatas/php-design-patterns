<?php

namespace Execution\Observer;

class LoggerObserver extends LoginObserver
{
	public function doUpdate(Login $login) {
		printf("loggin status %d\n", $login->getStatus()[0]);
	}
}
