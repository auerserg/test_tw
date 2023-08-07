<?php
/*
 * @author      auerserg@gmail.com
 * @package     AuerSerg_test_tw
 * @copyright   Copyright (c) 2023 AuerSerg (http://auer.pp.ua/). All rights reserved.
 * See LICENSE for license details.
 */

namespace AuerSerg\Model;

class Toy extends NurseryStock {
	public const SOUND = '~silence~';
	public const HUNT = '~sit down, didn`t even move~';

	protected $attr = [
		'sound' => self::SOUND,
		'hunt'  => self::HUNT,
	];
}
