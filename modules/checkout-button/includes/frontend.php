<?php
/**
 * Checkout Button
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

?>
<div class="pmpro-bb-checkout-button-wrapper">
	<?php
	PMPRO_BB::process_shortcode(
		sprintf(
			'[pmpro_checkout_button class="%s" level="%s" text="%s"]',
			esc_attr( $settings->button_class ),
			esc_attr( $settings->level ),
			esc_attr( $settings->button_text )
		)
	);
	?>
</div><!-- .pmpro-bb-checkout-button-wrapper -->
