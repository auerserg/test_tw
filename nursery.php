<?php
/*
 * @author      auerserg@gmail.com
 * @package     AuerSerg_test_tw
 * @copyright   Copyright (c) 2023 AuerSerg (http://auer.pp.ua/). All rights reserved.
 * See LICENSE for license details.
 */

use AuerSerg\Nursery;

require './init.php';

$argv = array_map( 'trim', $argv );
$argv = array_map( 'strtolower', $argv );

if ( ! empty( $argv[1] ) ) {
	if ( ! empty( $argv[2] ) ) {
		switch ( $argv[2] ) {
			case 'hunt':
				echo Nursery::instance()->hunt( $argv[1] );
				break;
			case 'sound':
				echo Nursery::instance()->sound( $argv[1] );
				break;
		}
	} else {
		printf( "Please select an animal command:\r\n%s", implode( "\r\n", [ 'hunt', 'sound' ] ) );
	}
} else {
	printf( "Please choose an animal from the nursery:\r\n%s", implode( "\r\n", Nursery::instance()->getItemsName() ) );
}
