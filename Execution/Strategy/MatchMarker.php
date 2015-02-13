<?php

namespace Execution\Strategy;

class MatchMarker extends Marker
{
	public function mark($response) {
		return $this->test == $response;
	}
}
