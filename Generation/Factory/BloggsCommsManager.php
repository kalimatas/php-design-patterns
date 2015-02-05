<?php

namespace Generation\Factory;

class BloggsCommsManager extends CommsManager
{
	public function getFooterText() {
		return "bloggs footer" . PHP_EOL;
	}

	public function getHeaderText() {
		return "bloggs header" . PHP_EOL;
	}

	/**
	 * @return AppEncoder
	 */
	public function getAppEncoder() {
		return new BloggsAppEncoder();
	}
}
