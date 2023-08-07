<?php
/*
 * @author      auerserg@gmail.com
 * @package     AuerSerg_test_tw
 * @copyright   Copyright (c) 2023 AuerSerg (http://auer.pp.ua/). All rights reserved.
 * See LICENSE for license details.
 */

namespace AuerSerg;

use AuerSerg\Model\Dog;
use AuerSerg\Model\Toy;

class Nursery {

	protected static $_instance = null;
	public $items = [];

	/**
	 * @return Nursery
	 */
	public static function instance() {
		if ( is_null( static::$_instance ) ) {
			static::$_instance = new static();
		}

		return static::$_instance;
	}

	/**
	 * @param string  $name
	 * @param boolean $is_alive
	 * @param array   $attrs
	 *
	 * @return $this
	 */
	public function setItem( $name, $is_alive = true, $attrs = [] ) {
		$class_name           = $is_alive ? Dog::class : Toy::class;
		$this->items[ $name ] = new $class_name( $name, $attrs );

		return $this;
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function sound( $name ) {
		if ( $item = $this->getItem( $name ) ) {
			return $item->sound();
		}

		return '';
	}

	/**
	 * @param string $name
	 *
	 * @return Dog|Toy
	 */
	public function getItem( $name ) {
		if ( array_key_exists( $name, $this->items ) ) {
			return $this->items[ $name ];
		}

		return null;
	}

	/**
	 * @param string $name
	 *
	 * @return string
	 */
	public function hunt( $name ) {
		if ( $item = $this->getItem( $name ) ) {
			return $item->hunt();
		}

		return '';
	}

	/**
	 * @return string[]
	 */
	public function getItemsName() {
		return array_map( function ( $item ) {
			return $item->getName();
		}, $this->items );
	}

	/**
	 * @param string $name
	 *
	 * @return boolean
	 */
	public function isAlive( $name ) {
		if ( $item = $this->getItem( $name ) ) {
			return $item instanceof Dog;
		}

		return null;
	}

}