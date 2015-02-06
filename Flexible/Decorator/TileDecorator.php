<?php

namespace Flexible\Decorator;

abstract class TileDecorator extends Tile
{
	/** @var Tile */
	protected $tile;

	public function __construct(Tile $tile) {
		$this->tile = $tile;
	}
}
