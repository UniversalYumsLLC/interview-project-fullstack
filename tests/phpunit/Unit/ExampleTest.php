<?php

namespace InterviewProjectFullstack\Test\Unit;

use WP_UnitTestCase;
use WC_Helper_Order;
use InterviewProjectFullstack;

class Example_Test extends WP_UnitTestCase {

	/**
	 * Example showing how to use a WC_Helper_Order helper method.
	 */
	public function test_example() {

		$timestamp = time();
		$order = WC_Helper_Order::create_order();
		$order->update_meta_data( 'example_timestamp', $timestamp );
		$order->save();

		$this->assertEquals( (int) $order->get_meta( 'example_timestamp' ), $timestamp );
	}

	/**
	 * Example showing how to test a static method in the InterviewProjectFullstack class.
	 */
	public function test_example_method() {
		$value = InterviewProjectFullstack::example_method();
		$this->assertEquals( 5, $value );
	}
}
