<?php
/**
 * Signup Module
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

// Short.
$pmpro_bb_short = '0';
if ( 'condensed' === $settings->short ) {
	$pmpro_bb_short = '1';
} elseif ( 'emailonly' === $settings->short ) {
	$pmpro_bb_short = 'emailonly';
}
// Labels.
$pmpro_bb_hide_labels = '0';
if ( 'yes' === $settings->hide_labels ) {
	$pmpro_bb_hide_labels = '1';
}
// Intro.
$pmpro_bb_intro = '0';
if ( 'custom' === $settings->intro ) {
	$pmpro_bb_intro = $settings->intro_custom;
} elseif ( 'yes' === $settings->intro ) {
	$pmpro_bb_intro = '1';
}
// Custom fields.
$pmpro_bb_custom_fields = '1';
if ( 'no' === $settings->custom_fields ) {
	$pmpro_bb_custom_fields = '0';
}
// Login.
$pmpro_bb_login = '1';
if ( 'no' === $settings->login ) {
	$pmpro_bb_login = '0';
}
// Redirect.
$pmpro_bb_redirect = 'referer';
if ( 'account' === $settings->redirect ) {
	$pmpro_bb_redirect = 'account';
} elseif ( 'custom' === $settings->redirect ) {
	$pmpro_bb_redirect = $settings->redirect_url;
}
// Title.
$pmpro_bb_title = '1';
if ( 'custom' === $settings->title ) {
	$pmpro_bb_title = $settings->title_custom;
} elseif ( 'no' === $settings->title ) {
	$pmpro_bb_title = '0';
}
?>
<div class="pmpro-bb-signup-wrapper">
	<?php
	if ( FLBuilderModel::is_builder_enabled() && 'yes' === $settings->login_preview ) {
		global $current_user;
		$current_user_id  = $current_user->ID;
		$current_user->ID = 0;
	}
	PMPRO_BB::process_shortcode(
		sprintf(
			'[pmpro_signup short="%s" level="%s" hidelabels="%s" intro="%s" custom_fields="%s" login="%s" redirect="%s" submit_button="%s" title="%s"]',
			esc_attr( $pmpro_bb_short ),
			absint( $settings->level ),
			esc_attr( $pmpro_bb_hide_labels ),
			esc_attr( $pmpro_bb_intro ),
			esc_attr( $pmpro_bb_custom_fields ),
			esc_attr( $pmpro_bb_login ),
			esc_attr( $pmpro_bb_redirect ),
			esc_attr( $settings->submit_button ),
			esc_attr( $pmpro_bb_title )
		)
	);
	if ( FLBuilderModel::is_builder_enabled() && 'yes' === $settings->login_preview ) {
		$current_user->ID = $current_user_id;
	}
	?>
</div><!-- .pmpro-bb-signup-wrapper -->
