<?php
/**
 * Levels.
 *
 * @package PMPro BB
 */

/**
 * Helper functions for levels.
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */
class PMPRO_BB_Levels {
	/**
	 * Get levels for Paid Memberships Pro.
	 *
	 * @return array Paid Memberships Pro levels.
	 */
	public static function get_levels() {
		$pmpro_levels      = pmpro_getAllLevels( false, true );
		$pmpro_level_order = pmpro_getOption( 'level_order' );

		if ( ! empty( $pmpro_level_order ) ) {
			$level_order = explode( ',', $pmpro_level_order );

			// Reorder array.
			$reordered_levels = array();
			foreach ( $level_order as $level_id ) {
				foreach ( $pmpro_levels as $key => $level ) {
					if ( $level_id === $level->id ) {
						$reordered_levels[] = $pmpro_levels[ $key ];
					}
				}
			}

			$pmpro_levels = $reordered_levels;
		}

		$pmpro_levels = apply_filters( 'pmpro_levels_array', $pmpro_levels );
		return $pmpro_levels;
	}
}
