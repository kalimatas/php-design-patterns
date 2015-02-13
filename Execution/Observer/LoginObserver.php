<?php

namespace Execution\Observer;

abstract class LoginObserver implements Observer
{
	/** @var Login */
	private $login;

	public function __construct(Login $login) {
		$this->login = $login;
		$login->attach($this);
	}

	public function update(Observable $observable) {
		if ($this->login === $observable) {
			$this->doUpdate($this->login);
		}
	}

	abstract public function doUpdate(Login $login);
}
