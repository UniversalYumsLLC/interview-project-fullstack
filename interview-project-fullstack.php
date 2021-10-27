<?php
/**
 * Plugin Name: Yums Interview Project
 * Plugin URI: https://github.com/UniversalYumsLLC
 * Description: Description goes here.
 * Version: 1.0.0
 * Author: Universal Yums
 * Author URI: https://github.com/UniversalYumsLLC
 * Developer: Developer Name
 * Developer URI: https://example.com
 *
 * WC requires at least: 5.6.0
 * WC tested up to: 5.8.0
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */


/**
 * Class InterviewProjectFullstack
 * @package InterviewProjectFullstack
 */
class InterviewProjectFullstack {

	/**
	 * The single instance of the class.
	 *
	 * @var mixed $instance
	 */
	protected static $instance;

	/**
	 * Main InterviewProjectFullstack Instance.
	 *
	 * Ensures only one instance of the InterviewProjectFullstack is loaded or can be loaded.
	 *
	 * @return InterviewProjectFullstack - Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'wp_dashboard_setup', [ $this, 'add_widgets' ], 100 );
	}

	public function add_widgets() {
		if ( current_user_can( 'edit_posts' ) ) {
			wp_add_dashboard_widget( 'ipf_order_search', 'Order Search by Email', [ $this, 'order_search' ] );
		}
	}

	/**
	 * Widget allows a shop admin to search for orders by email address.
	 */
	public function order_search() { ?>
		<h3>{ Placeholder for search field and button. }</h3>
	<?php }

	/**
	 * Example method that returns a value.
	 */
	public static function example_method() {
		return 5;
	}
}

InterviewProjectFullstack::instance();
