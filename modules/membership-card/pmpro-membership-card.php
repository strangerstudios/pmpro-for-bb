<?php //phpcs:ignore
class PMPRO_BB_Membership_Card extends FLBuilderModule {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Membership Card', 'pmpro-for-bb' ),
				'description'     => __( 'Membership Card', 'pmpro-for-bb' ),
				'category'        => __( 'Core', 'pmpro-for-bb' ),
				'group'           => apply_filters( 'pmpro_bb_whitelabel_category', __( 'PMPro', 'pmpro-for-bb' ) ),
				'dir'             => PMPRO_BB_DIR . 'modules/membership-card/',
				'url'             => PMPRO_BB_URL . 'modules/membership-card/',
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
	'PMPRO_BB_Membership_Card',
	array(
		'display'        => array(
			'title'    => __( 'Display', 'pmpro-for-bb' ),
			'sections' => array(
				'display' => array(
					'title'  => __( 'Display', 'pmpro-for-bb' ),
					'fields' => array(
						'allow_printing'  => array(
							'type'    => 'select',
							'label'   => __( 'Allow Printing the Membership Card', 'pmpro-for-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'yes',
							'toggle'  => array(
								'yes' => array(
									'fields' => array(
										'print_size',
									),
								),
							),
						),
						'print_size'      => array(
							'type'    => 'select',
							'label'   => __( 'Print Size', 'pmpro-for-bb' ),
							'options' => array(
								'all'    => __( 'All', 'pmpro-for-bb' ),
								'small'  => __( 'Small', 'pmpro-for-bb' ),
								'medium' => __( 'Medium', 'pmpro-for-bb' ),
								'large'  => __( 'Large', 'pmpro-for-bb' ),
							),
							'default' => 'all',
						),
						'display_featured_image' => array(
							'type' => 'select',
							'label' => __( 'Display a Featured Image from This Page', 'pmpro-for-bb' ),
							'options' => array(
								'no' => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'yes',
						),
						'display_qr_code' => array(
							'type'    => 'select',
							'label'   => __( 'Display QR Code', 'pmpro-for-bb' ),
							'options' => array(
								'false'  => __( 'No', 'pmpro-for-bb' ),
								'true' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'no',
							'toggle'  => array(
								'true' => array(
									'fields' => array(
										'qr_code_data',
									),
								),
							),
						),
						'qr_code_data'    => array(
							'type'    => 'select',
							'label'   => __( 'QR Code Configuration', 'pmpro-for-bb' ),
							'options' => array(
								'ID'    => __( 'ID', 'pmpro-for-bb' ),
								'email' => __( 'Email Address', 'pmpro-for-bb' ),
								'level' => __( 'Level', 'pmpro-for-bb' ),
							),
							'preview' => array(),
						),
					),
				),
			),
		),
		'appearance' => array(
			'title'    => __( 'Appearance', 'pmpro-for-bb' ),
			'sections' => array(
				'table'        => array(
					'title'  => '',
					'fields' => array(
						'typography' => array(
							'type'    => 'typography',
							'label'   => __( 'Typography', 'pmpro-for-bb' ),
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.pmpro_membership_card-data',
									),
								),
								'rules' => array(
									array(
										'selector' => '.pmpro_membership_card-data p',
									),
								),
							),
						),
						'table_width'  => array(
							'type'    => 'select',
							'label'   => __( 'Table Width', 'pmpro-for-bb' ),
							'options' => array(
								'regular' => __( 'Regular Width', 'pmpro-for-bb' ),
								'full'    => __( 'Full Width', 'pmpro-for-bb' ),
							),
							'default' => 'regular',
							'toggle'  => array(
								'regular' => array(
									'fields' => array(
										'table_align',
									),
								),
							),
						),
						'table_align'  => array(
							'type'    => 'align',
							'label'   => __( 'Table Alignment', 'pmpro-for-bb' ),
							'values'  => array(
								'left'   => '0 auto 0 0',
								'center' => '0 auto',
								'right'  => '0 0 0 auto',
							),
							'default' => '0 auto 0 0',
							'preview' => array(
								'type'     => 'css',
								'selector' => 'table',
								'property' => 'margin',
							),
						),
					),
				),
				'table_header' => array(
					'title'     => __( 'Table Header', 'pmpro-for-bb' ),
					'collapsed' => true,
					'fields'    => array(
						'table_heading_background_color' => array(
							'type'       => 'color',
							'label'      => __( 'Table Heading Background Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'thead tr',
										'property' => 'background-color',
									),
								),
							),
						),
						'table_heading_text_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Table Heading Text Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'thead tr th',
										'property' => 'color',
									),
								),
							),
						),
						'table_heading_padding'          => array(
							'type'       => 'dimension',
							'label'      => __( 'Table Heading Padding', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'thead tr th',
										'property' => 'padding',
									),
								),
							),
						),
						'table_heading_border'           => array(
							'type'    => 'border',
							'label'   => __( 'Table Heading Border', 'pmpro-for-bb' ),
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'thead tr th',
										'property' => 'border',
									),
								),
							),
						),
						'table_heading_typography'       => array(
							'type'       => 'typography',
							'label'      => __( 'Table Heading Typography', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'thead tr th',
									),
								),
							),
						),
					),
				),
				'table_body'   => array(
					'title'     => __( 'Table Body', 'pmpro-for-bb' ),
					'collapsed' => true,
					'fields'    => array(
						'odd_background_color'    => array(
							'type'       => 'color',
							'label'      => __( 'Odd Row Background Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr.odd',
										'property' => 'background-color',
									),
								),
							),
						),
						'odd_text_color'          => array(
							'type'       => 'color',
							'label'      => __( 'Odd Row Text Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr.odd td',
										'property' => 'color',
									),
								),
							),
						),
						'even_background_color'   => array(
							'type'       => 'color',
							'label'      => __( 'Even Row Background Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr:not(.odd)',
										'property' => 'background-color',
									),
								),
							),
						),
						'even_text_color'         => array(
							'type'       => 'color',
							'label'      => __( 'Even Row Text Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr:not(.odd) td',
										'property' => 'color',
									),
								),
							),
						),
						'active_background_color' => array(
							'type'       => 'color',
							'label'      => __( 'Active Row Background Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr.active:not(.odd)',
										'property' => 'background-color',
									),
								),
							),
						),
						'active_text_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Active Row Text Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr.active:not(.odd) td',
										'property' => 'color',
									),
								),
							),
						),
						'tbody_typography'        => array(
							'type'       => 'typography',
							'label'      => __( 'Row Typography', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr td',
									),
								),
							),
						),
						'tbody_padding'           => array(
							'type'       => 'dimension',
							'label'      => __( 'Row Padding', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'tbody tr td',
										'property' => 'padding',
									),
								),
							),
						),
					),
				),
			),
		),
		'button'         => array(
			'title'    => __( 'Button', 'pmpro-for-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Button', 'pmpro-for-bb' ),
					'fields' => array(
						'button_typography'             => array(
							'type'    => 'typography',
							'label'   => __( 'Button Typography', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn',
							),
						),
						'button_text_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn',
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
								'selector' => '.pmpro_btn:hover',
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
								'selector' => '.pmpro_btn',
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
								'selector' => '.pmpro_btn:hover',
								'property' => 'background-color',
							),
						),
						'button_border'                 => array(
							'type'    => 'border',
							'label'   => __( 'Button Border', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn',
								'property' => 'border',
							),
						),
						'button_border_hover'           => array(
							'type'    => 'border',
							'label'   => __( 'Button Border on Hover', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn:hover',
								'property' => 'border',
							),
						),
						'button_padding'                => array(
							'type'    => 'dimension',
							'label'   => __( 'Button Padding', 'pmpro-for-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
					),
				),
			),
		),
	)
);
