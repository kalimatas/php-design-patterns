<?php

namespace Execution\Strategy;

class RegexpMarker extends Marker
{
	public function mark($response) {
		return preg_match($this->test, $response);
	}
}
