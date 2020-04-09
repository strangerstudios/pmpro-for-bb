<?php
/**
 * Level Cards
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

$pmpro_levels = PMPRO_BB_Levels::get_levels();
?>
<div class="pmpro-bb-levels-wrapper columns-<?php echo absint( $settings->columns ); ?>">
	<?php
	foreach ( $settings->card as $card_level ) :
		if ( empty( $card_level->level ) ) {
			continue;
		}
		$level = $pmpro_levels[ $card_level->level ];
		?>
		<div class="pmpro-levels-card">
			<?php
			if ( 'yes' === $settings->display_level ) :
				?>
				<h2 class="pmpro-levels-name">
					<?php echo esc_html( $level->name ); ?>
				</h2>
				<?php
			endif;
			?>
			<?php
			if ( isset( $card_level->level_photo_src ) && 'yes' === $settings->display_photo ) :
				?>
				<div class="pmpro-levels-image">
					<?php
					echo sprintf( '<img src="%s" alt="%s" />', esc_url( $card_level->level_photo_src ), esc_attr( $level->name ) );
					?>
				</div>
				<?php
			endif;
			?>
			<?php
			if ( 'yes' === $settings->display_description && ! empty( $level->description ) ) :
				?>
				<div class="pmpro-levels-description">
				sdflkj
					<?php echo wp_kses_post( $level->description ); ?>
				</div>
				<?php
			endif;
			?>
			<?php
			if ( 'yes' === $settings->display_price ) :
				?>
				<div class="pmpro-levels-price">
					<?php
					if ( pmpro_isLevelFree( $level ) ) {
						esc_html_e( 'Free', 'pmpro-for-bb' );
					} else {
						$cost_text       = pmpro_getLevelCost( $level, true, true );
						$expiration_text = pmpro_getLevelExpiration( $level );
						if ( ! empty( $cost_text ) && ! empty( $expiration_text ) ) {
							echo wp_kses_post( $cost_text ) . '<br />' . wp_kses_post( $expiration_text );
						} elseif ( ! empty( $cost_text ) ) {
							echo wp_kses_post( $cost_text );
						} elseif ( ! empty( $expiration_text ) ) {
							echo wp_kses_post( $expiration_text );
						}
					}
					?>
				</div>
				<?php
			endif;
			?>
			<div class="pmpro-levels-button">
				<?php if ( empty( $current_user->membership_level->ID ) ) { ?>
					<a class="pmpro_btn pmpro_btn-select" href="<?php echo esc_url( pmpro_url( 'checkout', '?level=' . $level->id, 'https' ) ); ?>"><?php esc_html_e( 'Select', 'pmpro-for-bb' ); ?></a>
				<?php } elseif ( ! $current_level ) { ?>
					<a class="pmpro_btn pmpro_btn-select" href="<?php echo esc_url( pmpro_url( 'checkout', '?level=' . $level->id, 'https' ) ); ?>"><?php esc_html_e( 'Select', 'pmpro-for-bb' ); ?></a>
				<?php } elseif ( $current_level ) { ?>
					<?php
						// if it's a one-time-payment level, offer a link to renew.
					if ( pmpro_isLevelExpiringSoon( $current_user->membership_level ) && $current_user->membership_level->allow_signups ) {
						?>
								<a class="pmpro_btn pmpro_btn-select" href="<?php echo esc_url( pmpro_url( 'checkout', '?level=' . $level->id, 'https' ) ); ?>"><?php esc_html_e( 'Renew', 'pmpro-for-bb' ); ?></a>
							<?php
					} else {
						?>
								<a class="pmpro_btn disabled" href="<?php echo esc_url( pmpro_url( 'account' ) ); ?>"><?php esc_html_e( 'Your Level', 'pmpro-for-bb' ); ?></a>
							<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	endforeach;
	?>
</div>
