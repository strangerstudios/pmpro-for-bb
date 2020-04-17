<?php
/**
 * Membership Card
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

global $pmpro_membership_card_user, $current_user;
$pmpro_membership_card_user = $current_user;
?>
<div class="pmpro-bb-membership-card-wrapper">
	<?php
	PMPRO_BB::process_shortcode(
		sprintf(
			'[pmpro_membership_card print_size="%s" qr_code="%s" qr_data="%s"]',
			esc_attr( $settings->print_size ),
			esc_attr( $settings->display_qr_code ),
			esc_attr( $settings->qr_code_data )
		)
	);
	?>
</div><!-- .pmpro-bb-membership-card-wrapper -->
