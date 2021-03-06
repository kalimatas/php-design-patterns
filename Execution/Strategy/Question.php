<?php

namespace Execution\Strategy;

abstract class Question
{
	protected $prompt;
	/** @var Marker */
	protected $marker;

	public function __construct($prompt, Marker $marker) {
		$this->prompt = $prompt;
		$this->marker = $marker;
	}

	public function mark($response) {
		return $this->marker->mark($response);
	}
}
