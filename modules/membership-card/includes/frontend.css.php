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
if ( 'color' === $settings->background_type ) :
	FLBuilderCSS::rule(
		array(
			'selector' => ".fl-node-$id .pmpro_membership_card-print",
			'props'    => array(
				'background-color' => $settings->background_color,
			),
		)
	);
endif;
if ( 'gradient' === $settings->background_type ) :
	?>
	.fl-node-<?php echo esc_html( $id ); ?> .pmpro_membership_card-print {
		background-image: <?php echo esc_html( FLBuilderColor::gradient( $settings->background_gradient ) ); ?>;
	}
	<?php
endif;
if ( 'image' === $settings->background_type ) {
	?>
	.fl-node-<?php echo esc_html( $id ); ?> .pmpro_membership_card-print {
		position: relative;
		background-image: url(<?php echo esc_url( $settings->background_image_src ); ?>);
		background-size: cover;
		background-repeat: no-repeat;
	}
	.fl-node-<?php echo esc_html( $id ); ?> .pmpro_membership_card-print:before {
		content: '';
		display: block;
		z-index: 1;
		position: absolute;
		width: 100%;
		height: 100%;
		background: red;
	}
	.fl-node-<?php echo esc_html( $id ); ?> .pmpro_membership_card-inner {
		position: relative;
		z-index: 2;
	}
	<?php
	FLBuilderCSS::rule(
		array(
			'selector' => ".fl-node-$id .pmpro_membership_card-print:before",
			'props'    => array(
				'background-color' => $settings->background_overlay,
			),
		)
	);
}
FLBuilderCSS::rule(
	array(
		'selector' => ".fl-node-$id .pmpro_membership_card-data, .fl-node-$id .pmpro_membership_card-data p, .fl-node-$id .pmpro_membership_card-data ul",
		'props'    => array(
			'color' => $settings->text_color,
		),
	)
);

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

