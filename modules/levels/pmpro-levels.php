<?php //phpcs:ignore
class PMPRO_BB_Levels_Module extends FLBuilderModule {
	/**
	 * Class constructor.
	 */
	public function __construct() {
		parent::__construct(
			array(
				'name'            => __( 'Levels', 'pmpro-for-bb' ),
				'description'     => __( 'Levels', 'pmpro-for-bb' ),
				'category'        => __( 'Core', 'pmpro-for-bb' ),
				'group'           => apply_filters( 'pmpro_bb_whitelabel_category', __( 'PMPro', 'pmpro-for-bb' ) ),
				'dir'             => PMPRO_BB_DIR . 'modules/levels/',
				'url'             => PMPRO_BB_URL . 'modules/levels/',
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
	'PMPRO_BB_Levels_Module',
	array(
		'display'        => array(
			'title'    => __( 'Display', 'pmpro-for-bb' ),
			'sections' => array(
				'display' => array(
					'title'  => __( 'Display', 'pmpro-for-bb' ),
					'fields' => array(
						'level_display' => array(
							'type'    => 'select',
							'label'   => __( 'Level Display', 'pmpro-for-bb' ),
							'options' => array(
								'all'    => __( 'Display All Levels', 'pmpro-for-bb' ),
								'custom' => __( 'Display Only Certain Levels', 'pmpro-for-bb' ),
							),
							'default' => 'all',
							'toggle'  => array(
								'custom' => array(
									'fields' => array(
										'levels',
									),
								),
							),
						),
						'levels'        => array(
							'type'         => 'select',
							'label'        => __( 'Select Levels to Display', 'pmpro-for-bb' ),
							'options'      => $pmpro_bb_levels_options,
							'multi-select' => true,
							'help'         => __( 'CTRL+Click or Command+Click to select certain levels', 'pmpro-for-bb' ),
						),
					),
				),
			),
		),
		'table_settings' => array(
			'title'    => __( 'Table Settings', 'pmpro-for-bb' ),
			'sections' => array(
				'table'        => array(
					'title'  => '',
					'fields' => array(
						'table_border' => array(
							'type'    => 'border',
							'label'   => __( 'Table Border', 'pmpro-for-bb' ),
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
