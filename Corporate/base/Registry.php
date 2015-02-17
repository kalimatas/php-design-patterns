<?php

namespace Corporate\base;

abstract class Registry
{
	abstract public function get($key);
	abstract public function set($key, $val);
}
