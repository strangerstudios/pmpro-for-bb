<?php //phpcs:ignore
class PMPRO_BB_Signup_Module extends FLBuilderModule {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Signup Module', 'pmpro-bb' ),
				'description'     => __( 'Signup Module', 'pmpro-bb' ),
				'category'        => __( 'Core', 'pmpro-bb' ),
				'group'           => apply_filters( 'pmpro_bb_whitelabel_category', __( 'PMPro', 'pmpro-bb' ) ),
				'dir'             => PMPRO_BB_DIR . 'modules/signup/',
				'url'             => PMPRO_BB_URL . 'modules/signup/',
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
	'PMPRO_BB_Signup_Module',
	array(
		'options'        => array(
			'title'    => __( 'Options', 'pmpro-bb' ),
			'sections' => array(
				'options' => array(
					'title'  => __( 'Options', 'pmpro-bb' ),
					'fields' => array(
						'level'         => array(
							'type'    => 'select',
							'label'   => __( 'Select a Level', 'pmpro-bb' ),
							'options' => $pmpro_bb_levels_options,
						),
						'login'         => array(
							'type'    => 'select',
							'label'   => __( 'Show Login Link?', 'pmpro-bb' ),
							'options' => array(
								'0' => __( 'No', 'pmpro-bb' ),
								'1' => __( 'Yes', 'pmpro-bb' ),
							),
							'default' => 'yes',
						),
						'login'         => array(
							'type'    => 'select',
							'label'   => __( 'Show Login Link?', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'default' => 'yes',
						),
						'hide_labels'   => array(
							'type'    => 'select',
							'label'   => __( 'Hide Labels?', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'default' => 'no',
						),
						'hide_labels'   => array(
							'type'    => 'select',
							'label'   => __( 'Hide Labels?', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'default' => 'no',
						),
						'custom_fields' => array(
							'type'    => 'select',
							'label'   => __( 'Show Custom Fields?', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'default' => 'yes',
						),
						'redirect'      => array(
							'type'    => 'select',
							'label'   => __( 'Redirect Page', 'pmpro-bb' ),
							'options' => array(
								'referer' => __( 'Referer', 'pmpro-bb' ),
								'account' => __( 'Account Page', 'pmpro-bb' ),
								'custom'  => __( 'Custom URL', 'pmpro-bb' ),
							),
							'default' => 'referer',
							'toggle'  => array(
								'custom' => array(
									'fields' => array( 'redirect_url' ),
								),
							),
						),
						'redirect_url'  => array(
							'type'  => 'link',
							'label' => __( 'Redirect Custom URL', 'pmpro-bb' ),
						),
						'title'         => array(
							'type'    => 'select',
							'label'   => __( 'Show Title?', 'pmpro-bb' ),
							'options' => array(
								'no'     => __( 'No', 'pmpro-bb' ),
								'yes'    => __( 'Yes', 'pmpro-bb' ),
								'custom' => __( 'Custom Text', 'pmpro-bb' ),
							),
							'default' => 'yes',
							'toggle'  => array(
								'custom' => array(
									'fields' => array( 'title_custom' ),
								),
							),
						),
						'title_custom'  => array(
							'type'  => 'text',
							'label' => __( 'Custom Title', 'pmpro-bb' ),
						),
						'intro'         => array(
							'type'    => 'select',
							'label'   => __( 'Show Intro?', 'pmpro-bb' ),
							'options' => array(
								'no'     => __( 'No', 'pmpro-bb' ),
								'yes'    => __( 'Yes', 'pmpro-bb' ),
								'custom' => __( 'Custom Text', 'pmpro-bb' ),
							),
							'default' => 'no',
							'toggle'  => array(
								'custom' => array(
									'fields' => array( 'intro_custom' ),
								),
							),
						),
						'intro_custom'  => array(
							'type'  => 'text',
							'label' => __( 'Custom Intro', 'pmpro-bb' ),
						),
						'short'         => array(
							'type'    => 'select',
							'label'   => __( 'Display', 'pmpro-bb' ),
							'options' => array(
								'full'      => __( 'Full Display', 'pmpro-bb' ),
								'condensed' => __( 'Condensed Display', 'pmpro-bb' ),
								'emailonly' => __( 'Email Only', 'pmpro-bb' ),
							),
						),
						'submit_button' => array(
							'type'    => 'text',
							'label'   => __( 'Submit Button', 'pmpro-bb' ),
							'default' => __( 'Sign Up Now', 'pmpro-bb' ),
						),
					),
				),
			),
		),
		'table_settings' => array(
			'title'    => __( 'Table Settings', 'pmpro-bb' ),
			'sections' => array(
				'table'        => array(
					'title'  => '',
					'fields' => array(
						'table_border' => array(
							'type'    => 'border',
							'label'   => __( 'Table Border', 'pmpro-bb' ),
							'preview' => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => 'table',
										'property' => 'border',
									),
								),
							),
						),
						'table_width'  => array(
							'type'    => 'select',
							'label'   => __( 'Table Width', 'pmpro-bb' ),
							'options' => array(
								'regular' => __( 'Regular Width', 'pmpro-bb' ),
								'full'    => __( 'Full Width', 'pmpro-bb' ),
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
							'label'   => __( 'Table Alignment', 'pmpro-bb' ),
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
					'title'     => __( 'Table Header', 'pmpro-bb' ),
					'collapsed' => true,
					'fields'    => array(
						'table_heading_background_color' => array(
							'type'       => 'color',
							'label'      => __( 'Table Heading Background Color', 'pmpro-bb' ),
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
							'label'      => __( 'Table Heading Text Color', 'pmpro-bb' ),
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
							'label'      => __( 'Table Heading Padding', 'pmpro-bb' ),
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
							'label'   => __( 'Table Heading Border', 'pmpro-bb' ),
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
							'label'      => __( 'Table Heading Typography', 'pmpro-bb' ),
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
					'title'     => __( 'Table Body', 'pmpro-bb' ),
					'collapsed' => true,
					'fields'    => array(
						'odd_background_color'    => array(
							'type'       => 'color',
							'label'      => __( 'Odd Row Background Color', 'pmpro-bb' ),
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
							'label'      => __( 'Odd Row Text Color', 'pmpro-bb' ),
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
							'label'      => __( 'Even Row Background Color', 'pmpro-bb' ),
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
							'label'      => __( 'Even Row Text Color', 'pmpro-bb' ),
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
							'label'      => __( 'Active Row Background Color', 'pmpro-bb' ),
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
							'label'      => __( 'Active Row Text Color', 'pmpro-bb' ),
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
							'label'      => __( 'Row Typography', 'pmpro-bb' ),
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
							'label'      => __( 'Row Padding', 'pmpro-bb' ),
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
			'title'    => __( 'Button', 'pmpro-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Button', 'pmpro-bb' ),
					'fields' => array(
						'button_typography'             => array(
							'type'    => 'typography',
							'label'   => __( 'Button Typography', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn',
							),
						),
						'button_text_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color', 'pmpro-bb' ),
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
							'label'      => __( 'Button Text Color on Hover', 'pmpro-bb' ),
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
							'label'      => __( 'Button Background Color', 'pmpro-bb' ),
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
							'label'      => __( 'Button Background Color on Hover', 'pmpro-bb' ),
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
							'label'   => __( 'Button Border', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn',
								'property' => 'border',
							),
						),
						'button_border_hover'           => array(
							'type'    => 'border',
							'label'   => __( 'Button Border on Hover', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn:hover',
								'property' => 'border',
							),
						),
						'button_padding'                => array(
							'type'    => 'dimension',
							'label'   => __( 'Button Padding', 'pmpro-bb' ),
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
