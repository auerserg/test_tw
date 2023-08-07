<?php
/*
 * @author      auerserg@gmail.com
 * @package     AuerSerg_test_tw
 * @copyright   Copyright (c) 2023 AuerSerg (http://auer.pp.ua/). All rights reserved.
 * See LICENSE for license details.
 */

namespace AuerSerg\Model;

class Dog extends NurseryStock {
	public const SOUND = '"Woof! Woof!"';
	public const HUNT = '~ran to look for prey!~';

	protected $attr = [
		'sound' => self::SOUND,
		'hunt'  => self::HUNT,
	];
}