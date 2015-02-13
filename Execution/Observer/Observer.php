<?php

namespace Execution\Observer;

interface Observer
{
	public function update(Observable $observable);
}
