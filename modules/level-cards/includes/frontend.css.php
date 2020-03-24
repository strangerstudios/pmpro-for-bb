<?php
/**
 * Level Cards
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

// Photo Styles.
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'photo_border',
		'selector'     => ".fl-node-$id .pmpro-levels-image img",
	)
);
?>
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-levels-image {
	text-align: <?php echo esc_html( $settings->photo_align ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-levels-image img {
	max-width: <?php echo absint( $settings->photo_max_width ); ?>px;
	<?php
	if ( 'rounded' === $settings->photo_appearance ) :
		?>
		border-radius: 100%;
		<?php
	endif;
	?>
}
<?php

// Card styles.
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'padding',
		'selector'     => ".fl-node-$id .pmpro-levels-card",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'padding_top',
			'padding-right'  => 'padding_right',
			'padding-bottom' => 'padding_bottom',
			'padding-left'   => 'padding_left',
		),
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'border',
		'selector'     => ".fl-node-$id .pmpro-levels-card",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'border_hover',
		'selector'     => ".fl-node-$id .pmpro-levels-card:hover",
	)
);
if ( 'color' === $settings->background_type ) :
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .pmpro-levels-card",
		'props'    => array(
			'background-color' => $settings->background_color,
		),
	) );
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .pmpro-levels-card:hover",
		'props'    => array(
			'background-color' => $settings->background_color_hover,
		),
	) );
endif;
if ( 'gradient' === $settings->background_type ) :
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .pmpro-levels-card",
		'props'    => array(
			'background-image' => FLBuilderColor::gradient( $settings->background_gradient ),
		),
	) );
	FLBuilderCSS::rule( array(
		'selector' => ".fl-node-$id .pmpro-levels-card:hover",
		'props'    => array(
			'background-image' => FLBuilderColor::gradient( $settings->background_gradient_hover ),
		),
	) );
endif;

// Title Styles
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id h2.pmpro-levels-name",
	'props'    => array(
		'color' => $settings->level_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-card:hover h2.pmpro-levels-name",
	'props'    => array(
		'color' => $settings->level_text_color_hover,
	),
) );

// Description Styles
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-description",
	'props'    => array(
		'color' => $settings->description_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-card:hover .pmpro-levels-description",
	'props'    => array(
		'color' => $settings->description_text_color_hover,
	),
) );

// Price Styles
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-price",
	'props'    => array(
		'color' => $settings->price_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-card:hover .pmpro-levels-price",
	'props'    => array(
		'color' => $settings->price_text_color_hover,
	),
) );

// Margins
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'level_margin',
		'selector'     => ".fl-node-$id .pmpro-levels-name",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'level_margin_top',
			'margin-right'  => 'level_margin_right',
			'margin-bottom' => 'level_margin_bottom',
			'margin-left'   => 'level_margin_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'description_margin',
		'selector'     => ".fl-node-$id .pmpro-levels-description",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'description_margin_top',
			'margin-right'  => 'description_margin_right',
			'margin-bottom' => 'description_margin_bottom',
			'margin-left'   => 'description_margin_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'photo_margin',
		'selector'     => ".fl-node-$id .pmpro-levels-image",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'photo_margin_top',
			'margin-right'  => 'photo_margin_right',
			'margin-bottom' => 'photo_margin_bottom',
			'margin-left'   => 'photo_margin_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'price_margin',
		'selector'     => ".fl-node-$id .pmpro-levels-price",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'price_margin_top',
			'margin-right'  => 'price_margin_right',
			'margin-bottom' => 'price_margin_bottom',
			'margin-left'   => 'price_margin_left',
		),
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_margin',
		'selector'     => ".fl-node-$id .pmpro-levels-button",
		'unit'         => 'px',
		'props'        => array(
			'margin-top'    => 'button_margin_top',
			'margin-right'  => 'button_margin_right',
			'margin-bottom' => 'button_margin_bottom',
			'margin-left'   => 'button_margin_left',
		),
	)
);

// Typography.
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'level_typography',
		'selector'     => ".fl-node-$id .pmpro-levels-name",
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'description_typography',
		'selector'     => ".fl-node-$id .pmpro-levels-description",
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'price_typography',
		'selector'     => ".fl-node-$id .pmpro-levels-price",
	)
);
FLBuilderCSS::typography_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_typography',
		'selector'     => ".fl-node-$id .pmpro-levels-button a",
	)
);

// Button Styles.
?>
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-levels-button {
	text-align: <?php echo esc_html( $settings->button_align ); ?>;
}
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-levels-button a {
	display: inline-block;
}
<?php
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-button a",
	'props'    => array(
		'color' => $settings->button_text_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-button a:hover",
	'props'    => array(
		'color' => $settings->button_text_color_hover,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-button a",
	'props'    => array(
		'background-color' => $settings->button_background_color,
	),
) );
FLBuilderCSS::rule( array(
	'selector' => ".fl-node-$id .pmpro-levels-button a:hover",
	'props'    => array(
		'background-color' => $settings->button_background_color_hover,
	),
) );
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_border',
		'selector'     => ".fl-node-$id .pmpro-levels-button a",
	)
);
FLBuilderCSS::border_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_border_hover',
		'selector'     => ".fl-node-$id .pmpro-levels-button a:hover",
	)
);
FLBuilderCSS::dimension_field_rule(
	array(
		'settings'     => $settings,
		'setting_name' => 'button_padding',
		'selector'     => ".fl-node-$id .pmpro-levels-button a",
		'unit'         => 'px',
		'props'        => array(
			'padding-top'    => 'button_padding_top',
			'padding-right'  => 'button_padding_right',
			'padding-bottom' => 'button_padding_bottom',
			'padding-left'   => 'button_padding_left',
		),
	)
);

?>
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-bb-levels-wrapper {
	display: grid;
	grid-template-columns: 1fr 1fr;
	grid-template-rows: 1fr;
	grid-gap: 0 2em;
	grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
}
.fl-node-<?php echo esc_html( $id ); ?> .pmpro-bb-levels-wrapper .pmpro-levels-card {
	margin-bottom: 2em;
}
