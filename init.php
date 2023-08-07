<?php
/*
 * @author      auerserg@gmail.com
 * @package     AuerSerg_test_tw
 * @copyright   Copyright (c) 2023 AuerSerg (http://auer.pp.ua/). All rights reserved.
 * See LICENSE for license details.
 */

use AuerSerg\Nursery;

require './vendor/autoload.php';

function init() {
	Nursery::instance()->setItem( 'siba inu' );
	Nursery::instance()->setItem( 'pug', true, [ 'hunt' => '~turned up his nose and went to sleep~' ] );
	Nursery::instance()->setItem( 'dachshund' );
	Nursery::instance()->setItem( 'plush labrador', false );
	Nursery::instance()->setItem( 'rubber dachshund with a whistle', false, [ 'sound' => '"Squeak! Squeak!"' ] );
}

init();