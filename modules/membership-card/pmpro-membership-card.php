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
		'display'    => array(
			'title'    => __( 'Display', 'pmpro-for-bb' ),
			'sections' => array(
				'display' => array(
					'title'  => __( 'Display', 'pmpro-for-bb' ),
					'fields' => array(
						'allow_printing'         => array(
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
						'allow_navigation'       => array(
							'type'    => 'select',
							'label'   => __( 'Allow Navigation Below the Card', 'pmpro-for-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'yes',
						),
						'print_size'             => array(
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
							'type'    => 'select',
							'label'   => __( 'Display a Featured Image from This Page', 'pmpro-for-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-for-bb' ),
								'yes' => __( 'Yes', 'pmpro-for-bb' ),
							),
							'default' => 'yes',
						),
						'display_qr_code'        => array(
							'type'    => 'select',
							'label'   => __( 'Display QR Code', 'pmpro-for-bb' ),
							'options' => array(
								'false' => __( 'No', 'pmpro-for-bb' ),
								'true'  => __( 'Yes', 'pmpro-for-bb' ),
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
						'qr_code_data'           => array(
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
				'table' => array(
					'title'  => '',
					'fields' => array(
						'typography'          => array(
							'type'       => 'typography',
							'label'      => __( 'Typography', 'pmpro-for-bb' ),
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.pmpro_membership_card-data',
									),
									array(
										'selector' => '.pmpro_membership_card-data p',
									),
									array(
										'selector' => '.pmpro_membership_card-data ul',
									),
								),
							),
							'responsive' => true,
						),
						'background_type'     => array(
							'type'    => 'select',
							'label'   => __( 'Background Type', 'pmpro-for-bb' ),
							'options' => array(
								'color'    => __( 'Background Color', 'pmpro-for-bb' ),
								'gradient' => __( 'Gradient', 'pmpro-for-bb' ),
								'image'    => __( 'Background Image', 'pmpro-for-bb' ),
							),
							'default' => 'color',
							'toggle'  => array(
								'color'    => array(
									'fields' => array(
										'background_color',
									),
								),
								'gradient' => array(
									'fields' => array(
										'background_gradient',
									),
								),
								'image'    => array(
									'fields' => array(
										'background_image',
										'background_overlay',
									),
								),
							),
							'preview' => array(),
						),
						'background_color'    => array(
							'type'       => 'color',
							'label'      => __( 'Background Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.pmpro_membership_card-print',
										'property' => 'background',
									),
								),
							),
						),
						'background_gradient' => array(
							'type'       => 'gradient',
							'label'      => __( 'Background Gradient', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.pmpro_membership_card-print',
										'property' => 'background-image',
									),
								),
							),
						),
						'background_image'    => array(
							'type'       => 'photo',
							'label'      => __( 'Background Image', 'pmpro-for-bb' ),
							'show_reset' => true,
						),
						'background_overlay'  => array(
							'type'       => 'color',
							'label'      => __( 'Background Overlay Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'default'    => 'rgba(0,0,0,0.4)',
						),
						'text_color'          => array(
							'type'       => 'color',
							'label'      => __( 'Text Color', 'pmpro-for-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'  => 'css',
								'rules' => array(
									array(
										'selector' => '.pmpro_membership_card-data',
										'property' => 'color',
									),
									array(
										'selector' => '.pmpro_membership_card-data p',
										'property' => 'color',
									),
									array(
										'selector' => '.pmpro_membership_card-data ul',
										'property' => 'color',
									),
								),
							),
						),
						'border'              => array(
							'type'       => 'border',
							'label'      => __( 'Border', 'pmpro-for-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_membership_card-print',
								'property' => 'border',
							),
						),
					),
				),
			),
		),

	)
);
