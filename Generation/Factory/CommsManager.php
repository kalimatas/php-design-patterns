<?php

namespace Generation\Factory;

abstract class CommsManager
{
	abstract function getHeaderText();
	abstract function getAppEncoder();
	abstract function getFooterText();
}
