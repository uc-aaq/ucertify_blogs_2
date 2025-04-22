<?php
/** sidebar-image.php
 *
 * @author		Konstantin Obenland
 * @package		uCertify Customized
 * @since		1.0.0	- 05.02.2012
 */

tha_sidebars_before(); ?>
<section id="secondary" class="widget-area span4" role="complementary">
	<?php
	tha_sidebar_top();
	
	if ( ! dynamic_sidebar( 'image' ) ) {
		the_widget( 'The_Bootstrap_Image_Meta_Widget', array(), array(
			'before_widget'	=>	'<aside id="uc-customized-image-meta" class="widget well uc-customized-image-meta">',
			'after_widget'	=>	'</aside>',
			'before_title'	=>	'<h3 class="widget-title">',
			'after_title'	=>	'</h3>',
		) );
	}
	
	tha_sidebar_bottom(); ?>
</section><!-- #secondary .widget-area -->
<?php tha_sidebars_after();


/* End of file sidebar-image.php */
/* Location: ./wp-content/themes/uc-customized/sidebar-image.php */