<?php

namespace Corporate\controller;

use Corporate\base\ApplicationHelper;
use Corporate\command\CommandResolver;

class Controller
{
	/** @var ApplicationHelper */
	private $applicationHelper;

	private function __construct() {}

	public static function run() {
		$instance = new Controller();
		$instance->init();
		$instance->handleRequest();
	}

	public function init() {
		ApplicationHelper::instance()->init();
	}

	public function handleRequest() {
		$request = new Request();
		$resolver = new CommandResolver();
		$command = $resolver->getCommand($request);
		$command->execute($request);

		echo $request->getFeedbackString();
	}
}
