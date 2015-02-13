<?php

namespace Execution\Observer;

class Login implements Observable
{
	const LOGIN_USER_UNKNOWN = 1;
	const LOGIN_WRONG_PASS = 2;
	const LOGIN_ACCESS = 3;

	private $status = array();

	/** @var Observer[] */
	private $observers = array();

	public function attach(Observer $observer) {
		$this->observers[] = $observer;
	}

	public function detach(Observer $observer) {
		$newObservers = array();
		foreach ($this->observers as $obs) {
			if ($obs !== $observer) {
				$newObservers[] = $obs;
			}
		}
		$this->observers = $newObservers;
	}

	public function notify() {
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}

	public function handleLogin($user, $pass) {
		$ret = false;

		switch (rand(1, 3)) {
			case 1:
				$this->setStatus(self::LOGIN_USER_UNKNOWN, $user);
				$ret = false;
				break;
			case 2:
				$this->setStatus(self::LOGIN_WRONG_PASS, $user);
				$ret = false;
				break;
			case 3:
				$this->setStatus(self::LOGIN_ACCESS, $user);
				$ret = true;
				break;
		}

		$this->notify();
		return $ret;
	}

	public function setStatus($status, $user) {
		$this->status = array($status, $user);
	}

	public function getStatus() {
		return $this->status;
	}
}
