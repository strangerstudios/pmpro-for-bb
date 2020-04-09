<?php
/**
 * Membership Card
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

// Hide print styles if applicable.
if ( 'no' === $settings->allow_printing ) :
?>
.fl-node-<?php echo esc_html( $id ); ?> .pmpro_a-print {
	display: none;
}
<?php
endif;

// Hide featured image if applicable.
if ( 'no' === $settings->display_featured_image ) :
	?>
	.fl-node-<?php echo esc_html( $id ); ?> #pmpro_membership_card_image {
		display: none;
	}
	<?php
endif;

// Overall Typography
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'typography',
		'selector'     => ".fl-node-$id .pmpro_membership_card-data, .fl-node-$id .pmpro_membership_card-data p, .fl-node-$id .pmpro_membership_card-data ul",
	)
);

// Overall Colors
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro_membership_card-print",
	'props'    => array(
		'background-color' => $settings->background_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro_membership_card-data, .fl-node-$id .pmpro_membership_card-data p, .fl-node-$id .pmpro_membership_card-data ul",
	'props'    => array(
		'color' => $settings->text_color,
	),
) );

FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'table_border',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper table",
	)
);

FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'table_heading_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper thead tr th",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'table_heading_padding_top',
			'padding-right'  => 'table_heading_padding_right',
			'padding-bottom' => 'table_heading_padding_bottom',
			'padding-left'   => 'table_heading_padding_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'table_heading_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper thead tr th",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'table_heading_border',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper thead tr th",
	)
);

// Table Body.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-levels-wrapper tbody tr.odd",
	'props'    => array(
		'background-color' => $settings->odd_background_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-levels-wrapper tbody tr:not(.odd)",
	'props'    => array(
		'background-color' => $settings->even_background_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-levels-wrapper tbody tr.active",
	'props'    => array(
		'background-color' => $settings->active_background_color,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'tbody_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper tbody tr td",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'tbody_padding_top',
			'padding-right'  => 'tbody_padding_right',
			'padding-bottom' => 'tbody_padding_bottom',
			'padding-left'   => 'tbody_padding_left',
		),
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'tbody_typography',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper tbody tr td",
	)
);

// Button Styles.
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn",
	'props'    => array(
		'background-color' => $settings->button_background_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn:hover",
	'props'    => array(
		'background-color' => $settings->button_background_color_hover,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn",
	'props'    => array(
		'color' => $settings->button_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn:hover",
	'props'    => array(
		'color' => $settings->button_text_color_hover,
	),
) );
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_padding',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn",
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
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_border',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_border_hover',
		'selector'     => ".fl-node-$id .pmpro-bb-levels-wrapper .pmpro_btn:hover",
	)
);
