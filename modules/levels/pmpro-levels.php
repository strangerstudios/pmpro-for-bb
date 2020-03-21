<?php //phpcs:ignore
class PMPRO_BB_Levels extends FLBuilderModule {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Levels', 'pmpro-bb' ),
				'description'     => __( 'Levels', 'pmpro-bb' ),
				'category'        => __( 'Core', 'pmpro-bb' ),
				'group'           => apply_filters( 'pmpro_bb_whitelabel_category', __( 'PMPro', 'pmpro-bb' ) ),
				'dir'             => PMPRO_BB_DIR . 'modules/levels/',
				'url'             => PMPRO_BB_URL . 'modules/levels/',
				'editor_export'   => true,
				'enabled'         => true,
				'partial_refresh' => false,
			)
		);
	}
}
/**
 * Register the module and its form settings.
 */
FLBuilder::register_module(
	'PMPRO_BB_Levels',
	array(
		'container'   => array(
			'title'    => __( 'Container', 'pmpro-bb' ),
			'sections' => array(
				'container' => array(
					'title'  => __( 'Coupon Container', 'pmpro-bb' ),
					'fields' => array(
						'min_height'              => array(
							'type'       => 'unit',
							'label'      => __( 'Minimum Height', 'pmpro-bb' ),
							'default'    => 400,
							'responsive' => true,
							'preview'    => array(
								'type'      => 'css',
								'selector'  => '.bbvm-advanced-coupon',
								'property'  => 'min-height',
								'unit'      => 'px',
								'important' => true,
							),
						),
						'background_photo'        => array(
							'type'        => 'photo',
							'label'       => __( 'Background Photo', 'pmpro-bb' ),
							'show_remove' => true,
							'preview'     => array(
								'type'      => 'css',
								'selector'  => '.bbvm-advanced-coupon',
								'property'  => 'background-image',
								'important' => true,
							),
						),
						'background_overlay'      => array(
							'type'       => 'color',
							'label'      => __( 'Background Overlay', 'pmpro-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'default'    => '4f4f4f',
							'preview'    => array(
								'type'      => 'css',
								'selector'  => '.bbvm-advanced-coupon-overlay',
								'property'  => 'background-color',
								'important' => true,
							),
						),
						'outer_border'            => array(
							'type'    => 'unit',
							'label'   => __( 'Outer Border Width', 'pmpro-bb' ),
							'default' => 8,
							'preview' => array(
								'type'      => 'css',
								'selector'  => '.fl-bbvm-advanced-coupon-wrapper',
								'property'  => 'border-width',
								'important' => true,
								'unit'      => 'px',
							),
						),
						'outer_border_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Outer Border Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'default'    => '000000',
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-advanced-coupon-wrapper',
								'property' => 'border-color',
							),
						),
						'outer_border_appearance' => array(
							'type'    => 'select',
							'label'   => __( 'Outer Border Appearance', 'pmpro-bb' ),
							'options' => array(
								'none'   => __( 'None', 'pmpro-bb' ),
								'solid'  => __( 'Solid', 'pmpro-bb' ),
								'dashed' => __( 'Dashed', 'pmpro-bb' ),
								'dotted' => __( 'Dotted', 'pmpro-bb' ),
								'double' => __( 'Double', 'pmpro-bb' ),
							),
							'default' => 'dashed',
							'preview' => array(
								'type'     => 'css',
								'selector' => '.fl-bbvm-advanced-coupon-wrapper',
								'property' => 'border-style',
							),
						),
						'inner_border'            => array(
							'type'    => 'unit',
							'label'   => __( 'Inner Border Width', 'pmpro-bb' ),
							'default' => 10,
							'preview' => array(
								'type'      => 'css',
								'selector'  => '.bbvm-advanced-coupon-overlay',
								'property'  => 'border-width',
								'important' => true,
								'unit'      => 'px',
							),
						),
						'inner_border_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Inner Border Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'default'    => 'FFFFFF',
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-coupon-overlay',
								'property' => 'border-color',
							),
						),
						'inner_border_appearance' => array(
							'type'    => 'select',
							'label'   => __( 'Inner Border Appearance', 'pmpro-bb' ),
							'default' => 'solid',
							'options' => array(
								'none'   => __( 'None', 'pmpro-bb' ),
								'solid'  => __( 'Solid', 'pmpro-bb' ),
								'dashed' => __( 'Dashed', 'pmpro-bb' ),
								'dotted' => __( 'Dotted', 'pmpro-bb' ),
								'double' => __( 'Double', 'pmpro-bb' ),
							),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-coupon-overlay',
								'property' => 'border-style',
							),
						),
						'coupon_box_padding'      => array(
							'type'       => 'dimension',
							'label'      => __( 'Coupon Box Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-coupon',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
					),
				),
			),
		),
		'icon'        => array(
			'title'    => __( 'Photo/Icon', 'pmpro-bb' ),
			'sections' => array(
				'icon' => array(
					'title'  => __( 'Coupon Photo/Icon', 'pmpro-bb' ),
					'fields' => array(
						'photo_icon'        => array(
							'type'    => 'select',
							'default' => 'none',
							'label'   => __( 'Show a Coupon Icon/Photo', 'pmpro-bb' ),
							'options' => array(
								'photo' => __( 'Photo', 'pmpro-bb' ),
								'icon'  => __( 'Icon', 'pmpro-bb' ),
								'none'  => __( 'None', 'pmpro-bb' ),
							),
							'toggle'  => array(
								'photo' => array(
									'fields' => array(
										'top_photo',
										'top_photo_align',
										'top_photo_link',
										'top_photo_display',
										'top_photo_padding',
										'top_photo_margin',
										'top_photo_border',
									),
								),
								'icon'  => array(
									'fields' => array(
										'icon_size',
										'icon',
										'icon_align',
										'icon_color',
										'icon_display',
										'icon_padding',
										'icon_margin',
									),
								),
							),
						),
						'top_photo'         => array(
							'type'        => 'photo',
							'label'       => __( 'Photo', 'pmpro-bb' ),
							'show_remove' => true,
						),
						'top_photo_link'    => array(
							'type'          => 'link',
							'label'         => __( 'Photo Link', 'pmpro-bb' ),
							'responsive'    => true,
							'show_target'   => true,
							'show_nofollow' => true,
							'preview'       => array(),
						),
						'top_photo_align'   => array(
							'type'    => 'align',
							'label'   => __( 'Photo Alignment', 'pmpro-bb' ),
							'default' => 'center',
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-top-photo',
										'property' => 'text-align',
									),
								),
							),

						),
						'top_photo_display' => array(
							'type'    => 'select',
							'default' => 'square',
							'label'   => __( 'Photo Display', 'pmpro-bb' ),
							'options' => array(
								'square'  => __( 'Square/Rectangular', 'pmpro-bb' ),
								'rounded' => __( 'Rounded', 'pmpro-bb' ),
							),
						),
						'top_photo_padding' => array(
							'type'       => 'dimension',
							'label'      => __( 'Photo Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-top-photo',
										'property' => 'padding',
										'unit'     => 'px',
									),
								),
							),
						),
						'top_photo_margin'  => array(
							'type'       => 'dimension',
							'label'      => __( 'Photo Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-top-photo',
										'property' => 'margin',
										'unit'     => 'px',
									),
								),
							),
						),
						'top_photo_border'  => array(
							'type'       => 'border',
							'label'      => __( 'Photo Border', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-top-photo img',
										'property' => 'border',
									),
								),
							),
						),
						'icon_size'         => array(
							'type'    => 'unit',
							'label'   => __( 'Icon Size', 'pmpro-bb' ),
							'default' => 40,
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-icon span:before',
										'property' => 'font-size',
										'unit'     => 'px',
									),
								),
							),
						),
						'icon'              => array(
							'type'        => 'icon',
							'label'       => __( 'Select an Icon', 'pmpro-bb' ),
							'show_remove' => true,
						),
						'icon_align'        => array(
							'type'    => 'align',
							'label'   => __( 'Icon Alignment', 'pmpro-bb' ),
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-icon',
										'property' => 'text-align',
									),
								),
							),
						),
						'icon_color'        => array(
							'type'       => 'color',
							'label'      => __( 'Icon Color', 'pmpro-bb' ),
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-icon span:before',
										'property' => 'color',
									),
								),
							),
						),
						'icon_display'      => array(
							'type'    => 'select',
							'default' => 'square',
							'label'   => __( 'Icon Appearance', 'pmpro-bb' ),
							'options' => array(
								'square'  => __( 'Square/Rectangular', 'pmpro-bb' ),
								'rounded' => __( 'Rounded', 'pmpro-bb' ),
							),
						),
						'icon_padding'      => array(
							'type'       => 'dimension',
							'label'      => __( 'Icon Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-icon',
										'property' => 'padding',
										'unit'     => 'px',
									),
								),
							),
						),
						'icon_margin'       => array(
							'type'       => 'dimension',
							'label'      => __( 'Icon Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-icon',
										'property' => 'margin',
										'unit'     => 'px',
									),
								),
							),
						),
					),
				),
			),
		),
		'headline'    => array(
			'title'    => __( 'Headline', 'pmpro-bb' ),
			'sections' => array(
				'headline' => array(
					'title'  => __( 'Coupon Headline', 'pmpro-bb' ),
					'fields' => array(
						'enable_headline'            => array(
							'type'    => 'select',
							'default' => 'yes',
							'label'   => __( 'Display a Coupon Headline', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'toggle'  => array(
								'yes' => array(
									'fields' => array(
										'coupon_headline',
										'coupon_headline_color',
										'coupon_headline_typography',
										'coupon_headline_padding',
										'coupon_headline_margin',
									),
								),
							),
						),
						'coupon_headline'            => array(
							'type'    => 'text',
							'label'   => __( 'Coupon Headline', 'pmpro-bb' ),
							'default' => __( 'Huge Discount on All Our Products', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'text',
								'selector' => '.bbvm-advanced-coupon-headline',
							),
						),
						'coupon_headline_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Headline Color', 'pmpro-bb' ),
							'show_reset' => true,
							'default'    => 'FFFFFF',
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-headline',
										'property' => 'color',
									),
								),
							),
						),
						'coupon_headline_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Headline Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-headline',
									),
								),
							),
						),
						'coupon_headline_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Headline Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-headline',
										'property' => 'padding',
										'unit'     => 'px',
									),
								),
							),
						),
						'coupon_headline_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Headline Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-headline',
										'property' => 'margin',
										'unit'     => 'px',
									),
								),
							),
						),
					),
				),
			),
		),
		'description' => array(
			'title'    => __( 'Description', 'pmpro-bb' ),
			'sections' => array(
				'headline' => array(
					'title'  => __( 'Coupon Description', 'pmpro-bb' ),
					'fields' => array(
						'enable_description'     => array(
							'type'    => 'select',
							'default' => 'no',
							'label'   => __( 'Display a Coupon Description', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'toggle'  => array(
								'yes' => array(
									'fields' => array(
										'description',
										'description_color',
										'description_typography',
										'description_padding',
										'description_margin',
									),
								),
							),
						),
						'description'            => array(
							'type'    => 'editor',
							'label'   => __( 'Coupon Description', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'text',
								'selector' => '.bbvm-advanced-coupon-description',
							),
						),
						'description_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Description Text Color', 'pmpro-bb' ),
							'show_reset' => true,
							'default'    => 'FFFFFF',
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-description',
										'property' => 'color',
									),
								),
							),
						),
						'description_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Description Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-description',
									),
								),
							),
						),
						'description_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Description Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-description',
										'property' => 'padding',
										'unit'     => 'px',
									),
								),
							),
						),
						'description_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Description Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-description',
										'property' => 'margin',
										'unit'     => 'px',
									),
								),
							),
						),
					),
				),
			),
		),
		'coupon'      => array(
			'title'    => __( 'Coupon', 'pmpro-bb' ),
			'sections' => array(
				'headline' => array(
					'title'  => __( 'Coupon', 'pmpro-bb' ),
					'fields' => array(
						'enable_coupon'     => array(
							'type'    => 'select',
							'default' => 'yes',
							'label'   => __( 'Display a Coupon', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'toggle'  => array(
								'yes' => array(
									'fields' => array(
										'coupon_code',
										'coupon_bg_color',
										'coupon_text_color',
										'coupon_padding',
										'coupon_margin',
										'coupon_border',
										'coupon_typography',
									),
								),
							),
						),
						'coupon_code'       => array(
							'type'    => 'text',
							'label'   => __( 'Coupon Code', 'pmpro-bb' ),
							'default' => 'XJTXU',
							'preview' => array(
								'type'     => 'text',
								'selector' => '.bbvm-advanced-coupon-code',
							),
						),
						'coupon_bg_color'   => array(
							'type'       => 'color',
							'label'      => __( 'Coupon Background Color', 'pmpro-bb' ),
							'show_reset' => true,
							'default'    => 'FFFFFF',
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-code',
										'property' => 'background-color',
									),
								),
							),
						),
						'coupon_text_color' => array(
							'type'       => 'color',
							'label'      => __( 'Coupon Text Color', 'pmpro-bb' ),
							'show_reset' => true,
							'default'    => '000000',
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-code',
										'property' => 'color',
									),
								),
							),
						),
						'coupon_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Coupon Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-code',
										'property' => 'padding',
										'unit'     => 'px',
									),
								),
							),
						),
						'coupon_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Coupon Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-code',
										'property' => 'margin',
										'unit'     => 'px',
									),
								),
							),
						),
						'coupon_border'     => array(
							'type'    => 'border',
							'label'   => __( 'Coupon Border', 'pmpro-bb' ),
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-code',
										'property' => 'border',
									),
								),
							),
						),
						'coupon_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Coupon Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-code',
									),
								),
							),
						),
					),
				),
			),
		),
		'cta'         => array(
			'title'    => __( 'Call to Action', 'pmpro-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Call to Action', 'pmpro-bb' ),
					'fields' => array(
						'show_cta'                      => array(
							'type'    => 'select',
							'label'   => __( 'Show a Call to Action Button?', 'pmpro-bb' ),
							'options' => array(
								'yes' => __( 'Yes', 'pmpro-bb' ),
								'no'  => __( 'No', 'pmpro-bb' ),
							),
							'toggle'  => array(
								'yes' => array(
									'fields' => array(
										'button_text',
										'button_link',
										'button_icon',
										'button_background_color',
										'button_background_color_hover',
										'button_text_color',
										'button_text_color_hover',
										'button_width',
										'button_padding',
										'button_margin',
										'button_typography',
										'button_border',
									),
								),
							),
							'default' => 'no',
						),
						'button_text'                   => array(
							'type'    => 'text',
							'label'   => __( 'Button Text', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'text',
								'selector' => '.bbvm-advanced-coupon-button a',
							),
						),
						'button_link'                   => array(
							'type'    => 'link',
							'label'   => __( 'Button URL', 'pmpro-bb' ),
							'preview' => array(),
						),
						'button_icon'                   => array(
							'type'        => 'icon',
							'label'       => __( 'Select an Icon', 'pmpro-bb' ),
							'show_remove' => true,
						),
						'button_background_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Button Background Color', 'pmpro-bb' ),
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a',
										'property' => 'background-color',
									),
								),
							),
						),
						'button_background_color_hover' => array(
							'type'       => 'color',
							'label'      => __( 'Button Background Hover Color', 'pmpro-bb' ),
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a:hover',
										'property' => 'background-color',
									),
								),
							),
						),
						'button_text_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color', 'pmpro-bb' ),
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a',
										'property' => 'color',
									),
								),
							),
						),
						'button_text_color_hover'       => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Hover Color', 'pmpro-bb' ),
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a:hover',
										'property' => 'color',
									),
								),
							),
						),
						'button_icon'                   => array(
							'type'        => 'icon',
							'label'       => __( 'Select an Icon', 'pmpro-bb' ),
							'show_remove' => true,
						),
						'button_width'                  => array(
							'type'    => 'select',
							'label'   => __( 'Button Width', 'pmpro-bb' ),
							'options' => array(
								'inline' => __( 'Inline Centered', 'pmpro-bb' ),
								'block'  => __( 'Full Width', 'pmpro-bb' ),
							),
						),
						'button_padding'                => array(
							'type'       => 'dimension',
							'label'      => __( 'Button Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a',
										'property' => 'padding',
										'unit'     => 'px',
									),
								),
							),
						),
						'button_margin'                 => array(
							'type'       => 'dimension',
							'label'      => __( 'Button Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a',
										'property' => 'margin',
										'unit'     => 'px',
									),
								),
							),
						),
						'button_typography'             => array(
							'type'       => 'typography',
							'label'      => __( 'Button Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a',
									),
								),
							),
						),
						'button_border'                 => array(
							'type'    => 'border',
							'label'   => __( 'Button Border', 'pmpro-bb' ),
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.bbvm-advanced-coupon-button a',
										'property' => 'border',
									),
								),
							),
						),
					),
				),
			),
		),
		'disclaimer'  => array(
			'title'    => __( 'Disclaimer', 'pmpro-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Disclaimer', 'pmpro-bb' ),
					'fields' => array(
						'show_disclaimer'       => array(
							'type'    => 'select',
							'label'   => __( 'Show a Disclaimer?', 'pmpro-bb' ),
							'default' => 'no',
							'options' => array(
								'yes' => __( 'Yes', 'pmpro-bb' ),
								'no'  => __( 'No', 'pmpro-bb' ),
							),
							'toggle'  => array(
								'yes' => array(
									'fields' => array(
										'disclaimer_text',
										'disclaimer_typography',
										'disclaimer_color',
										'disclaimer_margin',
										'disclaimer_padding',
									),
								),
							),
						),
						'disclaimer_text'       => array(
							'type'        => 'textarea',
							'label'       => __( 'Enter Disclaimer Text', 'pmpro-bb' ),
							'description' => __( 'HTML allowed', 'pmpro-bb' ),
							'preview'     => array(
								'type'     => 'text',
								'selector' => '.bbvm-advanced-coupon-disclaimer',
							),
						),
						'disclaimer_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Disclaimer Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-coupon-disclaimer',
							),
						),
						'disclaimer_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Disclaimer Text Color', 'pmpro-bb' ),
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-coupon-disclaimer',
								'property' => 'color',
							),
						),
						'disclaimer_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Disclaimer Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-coupon-disclaimer',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
						'disclaimer_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Disclaimer Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.bbvm-advanced-coupon-disclaimer',
								'property' => 'margin',
								'unit'     => 'px',
							),
						),
					),
				),
			),
		),
	)
);
