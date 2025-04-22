<?php
/** footer.php
 *
 * @author		Om Ji Verma
 * @package		uCertify Customized
 * @since		1.0.0	- 02.02.2018
 */

				tha_footer_before(); ?>
				<footer id="colophon" role="contentinfo" class="span12">
					<?php tha_footer_top(); ?>
					<!--<div id="page-footer" class="well clearfix">
						<?php wp_nav_menu( array(
							'container'			=>	'nav',
							'container_class'	=>	'subnav',
							'theme_location'	=>	'footer-menu',
							'menu_class'		=>	'credits nav nav-pills pull-left',
							'depth'				=>	3,
							'fallback_cb'		=>	'the_bootstrap_credits',
							'walker'			=>	new The_Bootstrap_Nav_Walker,
						) );
						?>
						<div id="site-generator"<?php echo has_nav_menu('footer-menu') ? ' class="footer-nav-menu"' : ''; ?>>
							<a	href="<?php echo esc_url( __( 'http://wordpress.org/', 'uc-customized' ) ); ?>"
								title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'uc-customized' ); ?>"
								target="_blank"
								rel="generator"><?php printf( _x( 'Proudly powered by %s', 'WordPress', 'uc-customized' ), 'WordPress' ); ?></a>
						</div>
					</div><!-- #page-footer .well .clearfix -->
					<?php tha_footer_bottom(); ?>
				</footer><!-- #colophon -->
				<?php tha_footer_after(); ?>
			</div><!-- #page -->
		</div><!-- .container -->
	<!-- <?php printf( __( '%d queries. %s seconds.', 'uc-customized' ), get_num_queries(), timer_stop(0, 3) ); ?> -->
	<?php wp_footer(); ?>
	<br /><br />
<center>Copyright &copy; 2002-2018 uCertify. All Rights Reserved. &bull; All logos and trademarks are property of their respective owners.</center>
<br /><br /><br /><br />					
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/uc-customized/footer.php */