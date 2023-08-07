<?php
/*
 * @author      auerserg@gmail.com
 * @package     AuerSerg_test_tw
 * @copyright   Copyright (c) 2023 AuerSerg (http://auer.pp.ua/). All rights reserved.
 * See LICENSE for license details.
 */

use AuerSerg\Model\Dog;
use AuerSerg\Model\Toy;
use AuerSerg\Nursery;

require_once __DIR__ . '/../init.php';

class NurseryTest extends PHPUnit\Framework\TestCase {

	/**
	 * @var Nursery
	 */
	protected $nursery;

	public function setUp(): void {
		$this->nursery = Nursery::instance();
	}

	public function testSibaInu() {
		$name = 'siba inu';
		$this->assertEquals( Dog::SOUND, $this->nursery->sound( $name ) );
		$this->assertEquals( Dog::HUNT, $this->nursery->hunt( $name ) );
	}

	public function testPug() {
		$name = 'pug';
		$this->assertEquals( Dog::SOUND, $this->nursery->sound( $name ) );
		$this->assertEquals( '~turned up his nose and went to sleep~', $this->nursery->hunt( $name ) );
	}

	public function testDachshund() {
		$name = 'dachshund';
		$this->assertEquals( Dog::SOUND, $this->nursery->sound( $name ) );
		$this->assertEquals( Dog::HUNT, $this->nursery->hunt( $name ) );
	}

	public function testPlushLabrador() {
		$name = 'plush labrador';
		$this->assertEquals( Toy::SOUND, $this->nursery->sound( $name ) );
		$this->assertEquals( Toy::HUNT, $this->nursery->hunt( $name ) );
	}

	public function testRubberDachshundWithAWhistle() {
		$name = 'rubber dachshund with a whistle';
		$this->assertEquals( '"Squeak! Squeak!"', $this->nursery->sound( $name ) );
		$this->assertEquals( Toy::HUNT, $this->nursery->hunt( $name ) );
	}

	public function testSound() {
		foreach ( $this->nursery->getItemsName() as $name ) {
			$expected = $this->nursery->isAlive( $name ) ? Dog::SOUND : Toy::SOUND;
			if ( 'rubber dachshund with a whistle' === $name ) {
				$expected = '"Squeak! Squeak!"';
			}
			$this->assertEquals( $expected, $this->nursery->sound( $name ) );
		}
	}

	public function testHunt() {
		foreach ( $this->nursery->getItemsName() as $name ) {
			$expected = $this->nursery->isAlive( $name ) ? Dog::HUNT : Toy::HUNT;
			if ( 'pug' === $name ) {
				$expected = '~turned up his nose and went to sleep~';
			}
			$this->assertEquals( $expected, $this->nursery->hunt( $name ) );
		}
	}
}
