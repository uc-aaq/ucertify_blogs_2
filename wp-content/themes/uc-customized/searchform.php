<?php
/** searchform.php
 *
 * The template for displaying search forms
 *
 * @author		Konstantin Obenland
 * @package		uCertify Customized
 * @since		1.0.0 - 07.02.2012
 */
?>
<form method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s" class="assistive-text hidden"><?php _e( 'Search', 'uc-customized' ); ?></label>
	<div class="input-append">
		<input id="s" class="span3 search-query" type="search" name="s" placeholder="<?php esc_attr_e( 'Search', 'uc-customized' ); ?>">
		<button class="btn btn-inverse" name="submit" id="searchsubmit" type="submit"><?php _e( 'Go', 'uc-customized' ); ?></button>
   	</div>
</form>
<?php


/* End of file searchform.php */
/* Location: ./wp-content/themes/uc-customized/searchform.php */