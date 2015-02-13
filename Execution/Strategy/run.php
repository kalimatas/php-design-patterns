<?php

/** @noinspection PhpIncludeInspection */
require_once 'autoload.php';

use Execution\Strategy\Marker;
use Execution\Strategy\MatchMarker;
use Execution\Strategy\RegexpMarker;
use Execution\Strategy\TextQuestion;

/** @var Marker[] $markers */
$markers = array(
	new MatchMarker('five'),
	new RegexpMarker('/f.ve/'),
);

foreach ($markers as $marker) {
	echo get_class($marker) . PHP_EOL;

	$question = new TextQuestion('what is the number?', $marker);

	foreach (array('five', 'four') as $response) {
		if ($question->mark($response)) {
			printf("\treponse %s is right\n", $response);
		} else {
			printf("\treponse %s is wrong\n", $response);
		}
	}
}

echo PHP_EOL;

