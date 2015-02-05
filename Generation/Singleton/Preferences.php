<?php

namespace Generation\Singleton;

class Preferences
{
	private $props = array();

	protected function __construct() {}
	private function __clonse() {}
	private function __wakeup() {}

	/**
	 * @return Preferences
	 */
	public static function getInstance() {
		static $instance = null;
		if ($instance === null) {
			$instance = new static;
		}

		return $instance;
	}

	public function setProperty($key, $val) {
		$this->props[$key] = $val;
	}

	public function getProperty($key) {
		return $this->props[$key];
	}
}
