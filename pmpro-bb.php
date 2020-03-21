<?php // phpcs:ignoreline
/**
 * Plugin Name: Paid Memberships Pro - Beaver Builder Modules
 * Plugin URI: https://paidmembershipspro.com
 * Description: Paid Memberships Pro modules for Beaver Builder
 * Version: 1.0.0
 * Author: Ronald Huereca
 * Author URI: https://mediaron.com
 * Requires at least: 5.0
 * Contributors: ronalfy
 * Text Domain: pmpro-bb
 * Domain Path: /languages
 */
define( 'PMPRO_BB_PLUGIN_NAME', 'Paid Memberships Pro Modules for Beaver Builder' );
define( 'PMPRO_BB_DIR', plugin_dir_path( __FILE__ ) );
define( 'PMPRO_BB_URL', plugins_url( '/', __FILE__ ) );
define( 'PMPRO_BB_VERSION', '2.2.1' );
define( 'PMPRO_BB_SLUG', plugin_basename( __FILE__ ) );
define( 'PMPRO_BB_FILE', __FILE__ );

/**
 * Main plugin class for PMPro and BB.
 */
class PMPRO_BB {

	/**
	 * Class constructor.
	 */
	public function __construct() {
		add_action( 'plugin_loaded', array( $this, 'plugins_loaded' ), 9 );

		// Load text domain.
		load_plugin_textdomain( 'pmpro-bb', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Start the plugin loading process.
	 */
	public function plugins_loaded() {
		add_action( 'init', array( $this, 'init_actions' ) );
	}

	/**
	 * Initialize the plugin and load modules.
	 */
	public function init_actions() {
		// Register Module Scripts.
		add_action( 'wp_head', array( $this, 'render_scripts' ) );
		if ( class_exists( 'FLBuilder' ) && defined( 'PMPRO_DIR' ) ) {
			require 'modules/levels/pmpro-levels.php';
			new PMPRO_BB_Levels();
		}
	}

	/**
	 * Add PMPro to the front of all modules.
	 */
	public function render_scripts() {
		?>
		<style>
		form[class*="fl-builder-pmpro-"] .fl-lightbox-header h1:before {
			content: "PMPro " !important;
			position: relative;
			display: inline-block;
			margin-right: 5px;
		}
		</style>
		<?php
	}
}
new PMPRO_BB();