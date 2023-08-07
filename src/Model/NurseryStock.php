<?php
/*
 * @author      auerserg@gmail.com
 * @package     AuerSerg_test_tw
 * @copyright   Copyright (c) 2023 AuerSerg (http://auer.pp.ua/). All rights reserved.
 * See LICENSE for license details.
 */

namespace AuerSerg\Model;

abstract class NurseryStock {
	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var array
	 */
	protected $attr;

	public function __construct( $name, $attr = [] ) {
		$this->name = $name;
		$this->attr = array_replace( $this->attr, (array) $attr );
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function sound(){
		return $this->attr['sound'];
	}

	/**
	 * @return string
	 */
	public function hunt(){
		return $this->attr['hunt'];
	}
}