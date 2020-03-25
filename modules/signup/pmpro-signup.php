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
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ), 9 );
	}
	/**
	 * Try to enqueue Strong Password manager scripts. Hacky, but works.
	 */
	public function enqueue_scripts() {
		global $pmpro_pages;
		$object = get_queried_object();
		if ( is_a( $object, 'WP_Post' ) ) {
			$pmpro_pages['checkout'] = $object->post_name;
		}
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
		'options'       => array(
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
		'styles'        => array(
			'title'    => __( 'Styles', 'pmpro-bb' ),
			'sections' => array(
				'container' => array(
					'title'  => __( 'Container Settings', 'pmpro-bb' ),
					'fields' => array(
						'container_max_width'        => array(
							'type'         => 'unit',
							'label'        => __( 'Container Max-Width', 'pmpro-bb' ),
							'units'        => array( 'px', 'vw', '%' ),
							'default_unit' => '%',
							'preview'      => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form',
								'property' => 'max-width',
							),
							'responsive'   => true,
							'default'      => 100,
						),
						'container_align'            => array(
							'type'    => 'align',
							'label'   => __( 'Alignment', 'pmpro-bb' ),
							'values'  => array(
								'left'   => '0 auto 0 0',
								'center' => '0 auto',
								'right'  => '0 0 0 auto',
							),
							'default' => '0 auto 0 0',
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form',
								'property' => 'margin',
							),
						),
						'container_padding'          => array(
							'type'       => 'dimension',
							'label'      => __( 'Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form',
								'property' => 'padding',
							),
						),
						'container_background_color' => array(
							'type'       => 'color',
							'label'      => __( 'Background Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form',
								'property' => 'background-color',
							),
						),
						'container_border'           => array(
							'type'    => 'border',
							'label'   => __( 'Border', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form',
								'property' => 'border',
							),
						),
					),
				),
				'heading'   => array(
					'title'  => __( 'Heading', 'pmpro-bb' ),
					'fields' => array(
						'heading_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Heading Text Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form h2',
								'property' => 'color',
							),
						),
						'heading_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Heading Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form h2',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
						'heading_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Heading Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form h2',
								'property' => 'margin',
								'unit'     => 'px',
							),
						),
						'heading_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Heading Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form h2',
							),
						),
					),
				),
				'intro'     => array(
					'title'  => __( 'Introduction', 'pmpro-bb' ),
					'fields' => array(
						'intro_color'      => array(
							'type'       => 'color',
							'label'      => __( 'Intro Text Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form > p',
								'property' => 'color',
							),
						),
						'intro_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Intro Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form > p',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
						'intro_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Intro Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form > p',
								'property' => 'margin',
								'unit'     => 'px',
							),
						),
						'intro_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Intro Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_signup_form > p',
							),
						),
					),
				),
				'password'  => array(
					'title'  => __( 'Password Strength', 'pmpro-bb' ),
					'fields' => array(
						'password_info_text_color' => array(
							'type'       => 'color',
							'label'      => __( 'Info Text Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '#pmprosp-password-notice',
								'property' => 'color',
							),
						),
						'password_info_padding'    => array(
							'type'       => 'dimension',
							'label'      => __( 'Info Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '#pmprosp-password-notice',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
						'password_info_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Info Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '#pmprosp-password-notice',
								'property' => 'margin',
								'unit'     => 'px',
							),
						),
						'password_info_typography' => array(
							'type'       => 'typography',
							'label'      => __( 'Info Typography', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '#pmprosp-password-notice',
							),
						),
					),
				),
			),
		),
		'form_settings' => array(
			'title'    => __( 'Form Settings', 'pmpro-bb' ),
			'sections' => array(
				'preview' => array(
					'title'  => __( 'Preview', 'pmpro-bb' ),
					'fields' => array(
						'login_preview' => array(
							'type'    => 'select',
							'label'   => __( 'Preview Login Form?', 'pmpro-bb' ),
							'options' => array(
								'no'  => __( 'No', 'pmpro-bb' ),
								'yes' => __( 'Yes', 'pmpro-bb' ),
							),
							'help'    => __( 'Switch between what a logged in user sees and what a logged out user sees. Helpful for styling.', 'pmpro-bb' ),
						),
					),
				),
				'labels'  => array(
					'title'  => __( 'Form Labels', 'pmpro-bb' ),
					'fields' => array(
						'label_margin'     => array(
							'type'       => 'dimension',
							'label'      => __( 'Label Margin', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'label',
								'property' => 'margin',
							),
						),
						'label_text_color' => array(
							'type'       => 'color',
							'label'      => __( 'Label Text Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'label',
								'property' => 'color',
							),
						),
						'label_typography' => array(
							'type'    => 'typography',
							'label'   => __( 'Label Typography', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => 'label',
							),
						),
					),
				),
				'inputs'  => array(
					'title'  => __( 'Form Inputs', 'pmpro-bb' ),
					'fields' => array(
						'input_width'             => array(
							'type'         => 'unit',
							'label'        => __( 'Input Width', 'pmpro-bb' ),
							'units'        => array( 'px', 'vw', '%' ),
							'default_unit' => 'px',
							'preview'      => array(
								'type'     => 'css',
								'selector' => 'input:not([disabled]):not([type="submit"])',
								'property' => 'width',
							),
							'responsive'   => true,
							'default'      => 50,
						),
						'input_padding'           => array(
							'type'       => 'dimension',
							'label'      => __( 'Input Padding', 'pmpro-bb' ),
							'responsive' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'input:not([disabled]):not([type="submit"])',
								'property' => 'padding',
							),
						),
						'input_text_color'        => array(
							'type'       => 'color',
							'label'      => __( 'Text Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'input:not([disabled]):not([type="submit"])',
								'property' => 'color',
							),
						),
						'input_placeholder_color' => array(
							'type'       => 'color',
							'label'      => __( 'Placeholder Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'      => 'css',
								'selector'  => 'input:not([disabled]):not([type="submit"])::placeholder',
								'property'  => 'color',
								'important' => true,
							),
						),
						'input_background_color'  => array(
							'type'       => 'color',
							'label'      => __( 'Background Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'input:not([disabled]):not([type="submit"])',
								'property' => 'background-color',
							),
						),
						'input_border'            => array(
							'type'    => 'border',
							'label'   => __( 'Input Border', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => 'input:not([disabled]):not([type="submit"])',
								'property' => 'border',
							),
						),
						'input_typography'        => array(
							'type'    => 'typography',
							'label'   => __( 'Input Typography', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => 'input:not([disabled]):not([type="submit"])',
							),
						),
						'placeholder_typography'  => array(
							'type'    => 'typography',
							'label'   => __( 'Input Placeholder Typography', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => 'input:not([disabled]):not([type="submit"])::placeholder',
							),
						),
					),
				),
			),
		),
		'button'        => array(
			'title'    => __( 'Button', 'pmpro-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Button', 'pmpro-bb' ),
					'fields' => array(
						'button_width'                  => array(
							'type'         => 'unit',
							'label'        => __( 'Button Width', 'pmpro-bb' ),
							'units'        => array( 'px', 'vw', '%' ),
							'default_unit' => 'px',
							'preview'      => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn-submit-checkout',
								'property' => 'width',
							),
							'responsive'   => true,
							'default'      => 100,
						),
						'button_align'                  => array(
							'type'    => 'align',
							'label'   => __( 'Button Alignment', 'pmpro-bb' ),
							'default' => 'right',
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_submit',
								'property' => 'text-align',
							),
						),
						'button_typography'             => array(
							'type'    => 'typography',
							'label'   => __( 'Button Typography', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn-submit-checkout',
							),
						),
						'button_text_color'             => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn-submit-checkout',
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
								'selector' => '.pmpro_btn-submit-checkout:hover',
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
								'selector' => '.pmpro_btn-submit-checkout',
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
								'selector' => '.pmpro_btn-submit-checkout:hover',
								'property' => 'background-color',
							),
						),
						'button_border'                 => array(
							'type'    => 'border',
							'label'   => __( 'Button Border', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn-submit-checkout',
								'property' => 'border',
							),
						),
						'button_border_hover'           => array(
							'type'    => 'border',
							'label'   => __( 'Button Border on Hover', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn-submit-checkout:hover',
								'property' => 'border',
							),
						),
						'button_padding'                => array(
							'type'    => 'dimension',
							'label'   => __( 'Button Padding', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.pmpro_btn-submit-checkout',
								'property' => 'padding',
								'unit'     => 'px',
							),
						),
					),
				),
			),
		),
		'login'         => array(
			'title'    => __( 'Login', 'pmpro-bb' ),
			'sections' => array(
				'styles' => array(
					'title'  => __( 'Login Button', 'pmpro-bb' ),
					'fields' => array(
						'login_button_width'            => array(
							'type'         => 'unit',
							'label'        => __( 'Button Width', 'pmpro-bb' ),
							'units'        => array( 'px', 'vw', '%' ),
							'default_unit' => 'px',
							'preview'      => array(
								'type'     => 'css',
								'selector' => '.login-link a',
								'property' => 'width',
							),
							'responsive'   => true,
							'default'      => 100,
						),
						'login_button_align'            => array(
							'type'    => 'align',
							'label'   => __( 'Button Alignment', 'pmpro-bb' ),
							'default' => 'right',
							'preview' => array(
								'type'      => 'css',
								'selector'  => '.login-link',
								'property'  => 'text-align',
								'important' => true,
							),
						),
						'login_button_typography'       => array(
							'type'    => 'typography',
							'label'   => __( 'Button Typography', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.login-link a',
							),
						),
						'login_button_text_color'       => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.login-link a',
								'property' => 'color',
							),
						),
						'login_button_text_color_hover' => array(
							'type'       => 'color',
							'label'      => __( 'Button Text Color on Hover', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.login-link a:hover',
								'property' => 'color',
							),
						),
						'login_button_background_color' => array(
							'type'       => 'color',
							'label'      => __( 'Button Background Color', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.login-link a',
								'property' => 'background-color',
							),
						),
						'login_button_background_color_hover' => array(
							'type'       => 'color',
							'label'      => __( 'Button Background Color on Hover', 'pmpro-bb' ),
							'show_alpha' => true,
							'show_reset' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.login-link a:hover',
								'property' => 'background-color',
							),
						),
						'login_button_border'           => array(
							'type'    => 'border',
							'label'   => __( 'Button Border', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.login-link a',
								'property' => 'border',
							),
						),
						'login_button_border_hover'     => array(
							'type'    => 'border',
							'label'   => __( 'Button Border on Hover', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.login-link a:hover',
								'property' => 'border',
							),
						),
						'login_button_padding'          => array(
							'type'    => 'dimension',
							'label'   => __( 'Button Padding', 'pmpro-bb' ),
							'preview' => array(
								'type'     => 'css',
								'selector' => '.login-link a',
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
