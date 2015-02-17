<?php

namespace Corporate\base;

class SessionRegistry extends Registry
{
	private function __construct() {
		session_start();
	}

	private function __clone() {}
	private function __wakeup() {}

	/**
	 * @return SessionRegistry
	 */
	public static function instance() {
		static $instance = null;
		if ($instance === null) {
			$instance = new static;
		}

		return $instance;
	}

	public function set($key, $val) {
		$_SESSION[__CLASS__][$key] = $val;
	}

	public function get($key) {
		if (isset($_SESSION[__CLASS__][$key])) {
			return $_SESSION[__CLASS__][$key];
		}
		return null;
	}

	public static function getComplex() {
		return self::instance()->get('complex');
	}

	public static function setComplex(Complex $complex) {
		self::instance()->set('complex', $complex);
	}
}
