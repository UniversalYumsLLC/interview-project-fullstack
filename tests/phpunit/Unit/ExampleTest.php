<?php

namespace InterviewProjectFullstack\Test\Unit;

use WP_UnitTestCase;
use WC_Helper_Order;

class Example_Test extends WP_UnitTestCase {

	/**
	 * This does not actually test any plugin code,
	 * just included for demonstration purposes.
	 */
	public function test_example() {

		$timestamp = time();
		$order = WC_Helper_Order::create_order();
		$order->update_meta_data( 'example_timestamp', $timestamp );
		$order->save();

		$this->assertEquals( (int) $order->get_meta( 'example_timestamp' ), $timestamp );
	}
}
