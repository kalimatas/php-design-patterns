<?php

namespace Generation\Factory;

class MegaAppEncoder extends AppEncoder
{
	public function encode() {
		return "mega" . PHP_EOL;
	}
}
