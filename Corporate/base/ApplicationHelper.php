<?php

namespace Corporate\base;

class ApplicationHelper
{
	private function __construct() {}
	private function __clone() {}
	private function __wakeup() {}

	/**
	 * @return ApplicationHelper
	 */
	public static function instance() {
		static $instance = null;
		if ($instance === null) {
			$instance = new static;
		}

		return $instance;
	}

	public function init() {
		// init
	}
}
