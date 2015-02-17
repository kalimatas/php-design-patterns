<?php

namespace Corporate\base;

use Corporate\controller\Request;

class RequestRegistry extends Registry
{
	private $values = array();

	private function __construct() {}
	private function __clone() {}
	private function __wakeup() {}

	/**
	 * @return RequestRegistry
	 */
	public static function instance() {
		static $instance = null;
		if ($instance === null) {
			$instance = new static;
		}

		return $instance;
	}

	public function set($key, $val) {
		$this->values[$key] = $val;
	}

	public function get($key) {
		if (isset($this->values[$key])) {
			return $this->values[$key];
		}
		return null;
	}

	public static function getRequest() {
		return self::instance()->get('request');
	}

	public static function setRequest(Request $request) {
		self::instance()->set('request', $request);
	}
}
