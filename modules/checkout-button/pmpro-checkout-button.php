<?php //phpcs:ignore
class PMPRO_BB_Checkout_Button_Module extends FLBuilderModule {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Checkout Button', 'pmpro-for-bb' ),
				'description'     => __( 'Checkout Button', 'pmpro-for-bb' ),
				'category'        => __( 'Core', 'pmpro-for-bb' ),
				'group'           => apply_filters( 'pmpro_bb_whitelabel_category', __( 'PMPro', 'pmpro-for-bb' ) ),
				'dir'             => PMPRO_BB_DIR . 'modules/checkout-button/',
				'url'             => PMPRO_BB_URL . 'modules/checkout-button/',
				'editor_export'   => true,
				'enabled'         => true,
				'partial_refresh' => false,
			)
		);
	}
}
$pmpro_bb_levels         = PMPRO_BB_Levels::get_levels();
$pmpro_bb_levels_options = array();
foreach ( $pmpro_bb_levels as $pmpro_level ) {
	$pmpro_bb_levels_options[ $pmpro_level->id ] = $pmpro_level->name;
}
/**
 * Register the module and its form settings.
 */
FLBuilder::register_module(
	'PMPRO_BB_Checkout_Button_Module',
	array(
		'attributtes' => array(
			'title'    => __( 'Attributes', 'pmpro-for-bb' ),
			'sections' => array(
				'attributes' => array(
					'title'  => __( 'Attributes', 'pmpro-for-bb' ),
					'fields' => array(
						'level'        => array(
							'type'    => 'select',
							'label'   => __( 'Choose a Level', 'pmpro-for-bb' ),
							'options' => $pmpro_bb_levels_options,
						),
						'button_class' => array(
							'type'    => 'text',
							'label'   => __( 'Button Class', 'pmpro-for-bb' ),
							'default' => 'pmpro_btn',
						),
						'button_text'  => array(
							'type'    => 'text',
							'label'   => __( 'Button Text', 'pmpro-for-bb' ),
							'default' => __( 'Sign Up for !!name!! Now', 'pmpro-for-bb' ),
							'help'    => __( 'Available placeholders are: !!id!!, !!name!!, !!description!!, !!initial_payment!!, !!billing_amount!!, !!cycle_number!!, !!cycle_period!!, !!billing_limit!!, !!trial_amount!!, !!trial_limit!!, !!expiration_number!!, and !!expiration_period!!', 'pmpro-for-bb' ),
						),
					),
				),
			),
		),
		'styles'      => array(
			'title'    => __( 'Card Styles', 'pmpro-for-bb' ),
			'sections' => array(
				'layout'  => array(
					'title'  => __( 'Layout', 'pmpro-for-bb' ),
					'fields' => array(
						'card_width'          => array(
							'type'    => 'unit',
							'label'   => __( 'Card Width', 'pmpro-for-bb' ),
							'slider'  => array(
								'min'  => 150,
								'max'  => 1000,
								'step' => 10,
							),
							'default' => 300,
						),
						'display_level'       => array(
							'type'    => 'select',
							'label'   => __( 'Display Level Name', 'pmpro-for-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'yes',
						),
						'display_photo'       => array(
							'type'    => 'select',
							'label'   => __( 'Display Photo', 'pmpro-for-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'yes',
						),
						'display_description' => array(
							'type'    => 'select',
							'label'   => __( 'Display Description', 'pmpro-for-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'no',
						),
						'display_price'       => array(
							'type'    => 'select',
							'label'   => __( 'Display Price', 'pmpro-for-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'yes',
						),
						'photo_appearance'    => array(
							'type'    => 'select',
							'label'   => __( 'Select a Photo Appearance', 'pmpro-for-bb' ),
							'options' => array(
								'square'  => __( 'Square', 'pmpro-for-bb' ),
								'rounded' => __( 'Rounded', 'pmpro-for-bb' ),
							),
						),
						'photo_border'        => array(
							'type'    => 'border',
							'label'   => __( 'Photo Border', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'property' => 'border',
								'selector' => '.pmpro-levels-image img',
							),
						),
						'photo_align'         => array(
							'type'    => 'align',
							'label'   => __( 'Photo Alignment', 'pmpro-for-bb' ),
							'default' => 'left',
							'preview' => array(
								'type'     => 'css',
								'property' => 'text-align',
								'selector' => '.pmpro-levels-image',
							),
						),
						'photo_max_width'     => array(
							'type'       => 'unit',
							'label'      => __( 'Select a Photo Max Width', 'pmpro-for-bb' ),
							'responsive' => true,
							'default'    => 500,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'max-width',
								'selector' => '.pmpro-levels-image img',
								'unit'     => 'px',
							),
						),
					),
				),
				'display' => array(
					'title'  => __( 'Card Styles', 'pmpro-for-bb' ),
					'fields' => array(
						'padding'                      => array(
							'type'       => 'dimension',
							'label'      => __( 'Card Padding', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'padding',
								'selector' => '.pmpro-levels-card',
							),
						),
						'background_type'              => array(
							'type'    => 'select',
							'label'   => __( 'Display a Background Type', 'pmpro-for-bb' ),
							'default' => 'yes',
							'options' => array(
								'none'     => __( 'None', 'pmpro-for-bb' ),
								'color'    => __( 'Color', 'pmpro-for-bb' ),
								'gradient' => __( 'Gradient', 'pmpro-for-bb' ),
							),
							'toggle'  => array(
								'color'    => array(
									'fields' => array(
										'background_color',
										'background_color_hover',
									),
								),
								'gradient' => array(
									'fields' => array(
										'background_gradient',
										'background_gradient_hover',
									),
								),
							),
						),
						'background_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Card Background Color', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'background',
								'selector' => '.pmpro-levels-card',
							),
						),
						'background_color_hover'       => array(
							'type'       => 'color',
							'label'      => __( 'Card Background Color on Hover', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'background',
								'selector' => '.pmpro-levels-card:hover',
							),
						),
						'background_gradient'          => array(
							'type'       => 'gradient',
							'label'      => __( 'Card Gradient', 'pmpro-for-bb' ),
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'background',
								'selector' => '.pmpro-levels-card',
							),
						),
						'background_gradient_hover'    => array(
							'type'       => 'gradient',
							'label'      => __( 'Card Gradient on Hover', 'pmpro-for-bb' ),
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'background',
								'selector' => '.pmpro-levels-card:hover',
							),
						),
						'border'                       => array(
							'type'    => 'border',
							'label'   => __( 'Card Border', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'property' => 'border',
								'selector' => '.pmpro-levels-card',
							),
						),
						'border_hover'                 => array(
							'type'    => 'border',
							'label'   => __( 'Card Border on Hover', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'property' => 'border',
								'selector' => '.pmpro-levels-card:hover',
							),
						),
						'level_text_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Level Text Color', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'color',
								'selector' => '.pmpro-levels-name',
							),
						),
						'level_text_color_hover'       => array(
							'type'       => 'color',
							'label'      => __( 'Level Text Color on Hover', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'color',
								'selector' => '.pmpro-levels-card:hover pmpro-levels-name',
							),
						),
						'description_text_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Description Text Color', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'color',
								'selector' => '.pmpro-levels-description',
							),
						),
						'description_text_color_hover' => array(
							'type'       => 'color',
							'label'      => __( 'Description Text Color on Hover', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'color',
								'selector' => '.pmpro-levels-card:hover .pmpro-levels-description',
							),
						),
						'price_text_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Price Text Color', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'color',
								'selector' => '.pmpro-levels-price',
							),
						),
						'price_text_color_hover'       => array(
							'type'       => 'color',
							'label'      => __( 'Price Text Color on Hover', 'pmpro-for-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'color',
								'selector' => '.pmpro-levels-card:hover .pmpro-levels-price',
							),
						),
					),
				),
			),
		),
		'margins'     => array(
			'title'    => __( 'Margins', 'pmpro-for-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Margins', 'pmpro-for-bb' ),
					'fields' => array(
						'level_margin'       => array(
							'type'       => 'dimension',
							'label'      => __( 'Level Name Margin', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'margin',
								'selector' => '.pmpro-levels-name',
							),
						),
						'description_margin' => array(
							'type'       => 'dimension',
							'label'      => __( 'Level Description Margin', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'margin',
								'selector' => '.pmpro-levels-description',
							),
						),
						'photo_margin'       => array(
							'type'       => 'dimension',
							'label'      => __( 'Level Photo Margin', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'margin',
								'selector' => '.pmpro-levels-image',
							),
						),
						'price_margin'       => array(
							'type'       => 'dimension',
							'label'      => __( 'Level Price Margin', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'margin',
								'selector' => '.pmpro-levels-price',
							),
						),
						'button_margin'      => array(
							'type'       => 'dimension',
							'label'      => __( 'Level Button Margin', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'property' => 'margin',
								'selector' => '.pmpro-levels-button',
							),
						),
					),
				),
			),
		),
		'button'      => array(
			'title'    => __( 'Button', 'pmpro-for-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Button', 'pmpro-for-bb' ),
					'fields' => array(
						'button_align'                  => array(
							'type'    => 'align',
							'label'   => __( 'Button Alignment', 'pmpro-for-bb' ),
							'default' => 'left',
							'preview' => array(
								'type'     => 'css',
								'property' => 'text-align',
								'selector' => '.pmpro-levels-button',
							),
						),
						'button_width'                  => array(
							'type'    => 'select',
							'label'   => __( 'Button Width', 'pmpro-for-bb' ),
							'default' => 'inline',
							'options' => array(
								'inline' => __( 'Default', 'pmpro-for-bb' ),
								'full'   => __( 'Full Width', 'pmpro-for-bb' ),
							),
						),
						'button_text_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a',
								'property' => 'color',
							),
						),
						'button_text_color_hover'       => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color on Hover', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a:hover',
								'property' => 'color',
							),
						),
						'button_background_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Button Background Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a',
								'property' => 'background-color',
							),
						),
						'button_background_color_hover' => array(
							'type'       => 'color',
							'label'      => __( 'Button Background Color on Hover', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a:hover',
								'property' => 'background-color',
							),
						),
						'button_border'                 => array(
							'type'    => 'border',
							'label'   => __( 'Button Border', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a',
								'property' => 'border',
							),
						),
						'button_border_hover'           => array(
							'type'    => 'border',
							'label'   => __( 'Button Border on Hover', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a:hover',
								'property' => 'border',
							),
						),
						'button_padding'                => array(
							'type'    => 'dimension',
							'label'   => __( 'Button Padding', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
					),
				),
			),
		),
		'typography'  => array(
			'title'    => __( 'Typography', 'pmpro-for-bb' ),
			'sections' => array(
				'typography' => array(
					'title'  => __( 'Typography', 'pmpro-for-bb' ),
					'fields' => array(
						'level_typography'       => array(
							'type'       => 'typography',
							'label'      => __( 'Level Name Typography', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-name',
							),
						),
						'description_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Level Description Typography', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-description',
							),
						),
						'price_typography'       => array(
							'type'       => 'typography',
							'label'      => __( 'Level Price Typography', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-price',
							),
						),
						'button_typography'      => array(
							'type'       => 'typography',
							'label'      => __( 'Button Typography', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro-levels-button a',
							),
						),
					),
				),
			),
		),
	)
);
