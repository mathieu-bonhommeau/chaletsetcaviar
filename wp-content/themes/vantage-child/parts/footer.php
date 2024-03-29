<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if ( ! siteorigin_page_setting( 'hide_footer_widgets', false ) ) : ?>
		<div id="footer-widgets" class="full-container">
			<?php dynamic_sidebar( 'sidebar-footer' ) ?>
		
		</div><!-- #footer-widgets -->
		<!--se connecter au back-office-->
				<?php echo apply_filters( 'vantage_footer_attribution', '<div id="connect">' . sprintf( __( '<a href="%s">Comptes</a>', 'vantage' ), 'http://chaletsetcaviar.mathieu-b.com/wp-admin' ) . '</div>' ) ?>
	<?php endif; ?>

	<?php $site_info_text = apply_filters( 'vantage_site_info', siteorigin_setting( 'general_site_info_text' ) ); if ( ! empty( $site_info_text ) || siteorigin_setting( 'general_privacy_policy_link' ) ) : ?>
		<div id="site-info">
			<?php
				if ( ! empty( $site_info_text ) ) {
					echo '<span>' . wp_kses_post( $site_info_text ) . '</span>';
				}
				if ( function_exists( 'the_privacy_policy_link' ) && siteorigin_setting( 'general_privacy_policy_link' ) ) {
					the_privacy_policy_link( '<span>', '</span>' );
				}
			?>
		</div><!-- #site-info -->
	<?php endif; ?>


</footer><!-- #colophon .site-footer -->
