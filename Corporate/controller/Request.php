<?php

namespace Corporate\controller;

class Request
{
	private $properties = array();
	private $feedback = array();

	public function setProperty($key, $val) {
		$this->properties[$key] = $val;
	}

	public function getProperty($key) {
		if ($key == 'cmd') {
			$commands = array('one', 'two', '');
			return $commands[array_rand($commands)];
		}

		if (isset($this->properties[$key])) {
			return $this->properties[$key];
		}
		return null;
	}

	public function addFeedback($message) {
		$this->feedback[] = $message;
	}

	public function getFeedback() {
		return $this->feedback;
	}

	public function getFeedbackString($separator = PHP_EOL) {
		return implode($separator, $this->feedback);
	}
}
