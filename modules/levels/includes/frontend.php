<?php
/**
 * Levels
 *
 * @link https://paidmembershipspro.com
 *
 * @package PMPro BB
 * @since 1.0.0
 */

global $wpdb, $pmpro_msg, $pmpro_msgt, $current_user;

$pmpro_levels = PMPRO_BB_Levels::get_levels();
?>
<div class="pmpro-bb-levels-wrapper">
	<?php
	if ( 'table' === $settings->display ) :
		?>
		<table id="pmpro_levels_table" class="pmpro_table pmpro_checkout">
			<thead>
				<tr>
					<th><?php esc_html_e( 'Level', 'pmpro-bb' ); ?></th>
					<th><?php esc_html_e( 'Price', 'pmpro-bb' ); ?></th>	
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$count = 0;
				foreach ( $pmpro_levels as $level ) {
					if ( isset( $current_user->membership_level->ID ) ) {
						$current_level = ( $current_user->membership_level->ID == $level->id );
					} else {
						$current_level = false;
					}
					?>
					<tr class="
					<?php
					if ( $count++ % 2 == 0 ) {
						?>
						odd<?php } ?>
					<?php
					if ( $current_level == $level ) {
						?>
					active<?php } ?>">
					<td><?php echo $current_level ? '<strong>' . esc_html( $level->name ) . '</strong>' : esc_html( $level->name ); ?></td>
					<td>
						<?php
						if ( pmpro_isLevelFree( $level ) ) {
							$cost_text = '<strong>' . esc_html__( 'Free', 'pmpro-bb' ) . '</strong>';
						} else {
							$cost_text = pmpro_getLevelCost( $level, true, true );
						}
							$expiration_text = pmpro_getLevelExpiration( $level );
						if ( ! empty( $cost_text ) && ! empty( $expiration_text ) ) {
							echo $cost_text . '<br />' . $expiration_text;
						} elseif ( ! empty( $cost_text ) ) {
							echo $cost_text;
						} elseif ( ! empty( $expiration_text ) ) {
							echo $expiration_text;
						}
						?>
					</td>
					<td>
						<?php if ( empty( $current_user->membership_level->ID ) ) { ?>
						<a class="pmpro_btn pmpro_btn-select" href="<?php echo esc_url( pmpro_url( 'checkout', '?level=' . $level->id, 'https' ) ); ?>"><?php esc_html_e( 'Select', 'pmpro-bb' ); ?></a>
					<?php } elseif ( ! $current_level ) { ?>                	
						<a class="pmpro_btn pmpro_btn-select" href="<?php echo esc_url( pmpro_url( 'checkout', '?level=' . $level->id, 'https' ) ); ?>"><?php esc_html_e( 'Select', 'pmpro-bb' ); ?></a>
					<?php } elseif ( $current_level ) { ?>      
						
						<?php
							// if it's a one-time-payment level, offer a link to renew
						if ( pmpro_isLevelExpiringSoon( $current_user->membership_level ) && $current_user->membership_level->allow_signups ) {
							?>
									<a class="pmpro_btn pmpro_btn-select" href="<?php echo esc_url( pmpro_url( 'checkout', '?level=' . $level->id, 'https' ) ); ?>"><?php esc_html_e( 'Renew', 'pmpro-bb' ); ?></a>
								<?php
						} else {
							?>
									<a class="pmpro_btn disabled" href="<?php echo pmpro_url( 'account' ); ?>"><?php esc_html_e( 'Your Level', 'pmpro-bb' ); ?></a>
								<?php
						}
						?>
						
					<?php } ?>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<?php
	endif;
	?>
</div><!-- .pmpro-bb-levels-wrapper -->
