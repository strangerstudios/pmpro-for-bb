<?php
/**
 * Signup Module
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

// Base Input Styles.
?>
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-bb-signup-wrapper form.pmpro_form .input,
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-bb-signup-wrapper form.pmpro_form textarea,
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-bb-signup-wrapper form.pmpro_form select,
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-bb-signup-wrapper #pmprosp-password-notice,
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-bb-signup-wrapper .login-link a {
	display: inline-block;
	max-width: 100%;
}
<?php
// Container styles.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form",
	'props'    => array(
		'max-width' => $settings->container_max_width . $settings->container_max_width_unit,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form",
	'props'    => array(
		'margin' => $settings->container_align,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'container_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'container_padding_top',
			'padding-right'  => 'container_padding_right',
			'padding-bottom' => 'container_padding_bottom',
			'padding-left'   => 'container_padding_left',
		),
	)
);
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form",
	'props'    => array(
		'background-color' => $settings->container_background_color,
	),
) );
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'container_border',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form",
	)
);

// Heading Styles.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form h2",
	'props'    => array(
		'color' => $settings->heading_color,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'heading_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form h2",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'heading_padding_top',
			'padding-right'  => 'heading_padding_right',
			'padding-bottom' => 'heading_padding_bottom',
			'padding-left'   => 'heading_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'heading_margin',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form h2",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'heading_margin_top',
			'margin-right'  => 'heading_margin_right',
			'margin-bottom' => 'heading_margin_bottom',
			'margin-left'   => 'heading_margin_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'heading_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form h2",
	)
);

// Intro Styles.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form > p",
	'props'    => array(
		'color' => $settings->intro_color,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'intro_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form > p",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'intro_padding_top',
			'padding-right'  => 'intro_padding_right',
			'padding-bottom' => 'intro_padding_bottom',
			'padding-left'   => 'intro_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'intro_margin',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form > p",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'intro_margin_top',
			'margin-right'  => 'intro_margin_right',
			'margin-bottom' => 'intro_margin_bottom',
			'margin-left'   => 'intro_margin_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'intro_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form > p",
	)
);

// Password Strength fields.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper #pmprosp-password-notice",
	'props'    => array(
		'color' => $settings->password_info_text_color,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'password_info_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper #pmprosp-password-notice",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'password_info_padding_top',
			'padding-right'  => 'password_info_padding_right',
			'padding-bottom' => 'password_info_padding_bottom',
			'padding-left'   => 'password_info_padding_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'password_info_margin',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper #pmprosp-password-notice",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'password_info_margin_top',
			'margin-right'  => 'password_info_margin_right',
			'margin-bottom' => 'password_info_margin_bottom',
			'margin-left'   => 'password_info_margin_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'password_info_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper #pmprosp-password-notice",
	)
);

// Labels.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper label",
	'props'    => array(
		'color' => $settings->label_text_color,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'label_margin',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper label",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'label_margin_top',
			'margin-right'  => 'label_margin_right',
			'margin-bottom' => 'label_margin_bottom',
			'margin-left'   => 'label_margin_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'label_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper label",
	)
);

// Inputs.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])",
	'props'    => array(
		'width' => $settings->input_width . $settings->input_width_unit,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'input_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'input_padding_top',
			'padding-right'  => 'input_padding_right',
			'padding-bottom' => 'input_padding_bottom',
			'padding-left'   => 'input_padding_left',
		),
	)
);
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])",
	'props'    => array(
		'color' => $settings->input_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])::placeholder",
	'props'    => array(
		'color' => $settings->input_placeholder_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])",
	'props'    => array(
		'background-color' => $settings->input_background_color,
	),
) );
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'input_border',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])",
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'input_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])",
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'placeholder_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_signup_form input:not([disabled]):not([type=\"submit\"])::placeholder",
	)
);

// Signup Button Styles.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout",
	'props'    => array(
		'width' => $settings->button_width . $settings->button_width_unit,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_submit",
	'props'    => array(
		'text-align' => $settings->button_align,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout",
	'props'    => array(
		'background-color' => $settings->button_background_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout:hover",
	'props'    => array(
		'background-color' => $settings->button_background_color_hover,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout",
	'props'    => array(
		'color' => $settings->button_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout:hover",
	'props'    => array(
		'color' => $settings->button_text_color_hover,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'button_padding_top',
			'padding-right'  => 'button_padding_right',
			'padding-bottom' => 'button_padding_bottom',
			'padding-left'   => 'button_padding_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_border',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_border_hover',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .pmpro_btn-submit-checkout:hover",
	)
);

// Login Button Styles.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a",
	'props'    => array(
		'width' => $settings->login_button_width . $settings->login_button_width_unit,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link",
	'props'    => array(
		'text-align' => $settings->login_button_align,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a",
	'props'    => array(
		'background-color' => $settings->login_button_background_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a:hover",
	'props'    => array(
		'background-color' => $settings->login_button_background_color_hover,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a",
	'props'    => array(
		'color' => $settings->login_button_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a:hover",
	'props'    => array(
		'color' => $settings->login_button_text_color_hover,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'login_button_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'button_padding_top',
			'padding-right'  => 'button_padding_right',
			'padding-bottom' => 'button_padding_bottom',
			'padding-left'   => 'button_padding_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'login_button_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'login_button_border',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'login_button_border_hover',
		'selector'     => ".fl-node-$id .pmpro-bb-signup-wrapper .login-link a:hover",
	)
);
