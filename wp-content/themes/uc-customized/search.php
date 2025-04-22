<?php
/** search.php
 *
 * The template for displaying Search Results pages.
 *
 * @author		Konstantin Obenland
 * @package		uCertify Customized
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>

<section id="primary" class="span8">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		if ( have_posts() ) : ?>
	
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'uc-customized' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>
			
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}			
			
			//make a json request that will return json
					
			$search_result = file_get_contents('https://www.ucertify.com/courses/search.php?term='.urlencode(get_search_query()));
			$search_array = json_decode($search_result,true);
			
/*           Below comments print the whole search array.
*			 echo "<pre>";
*			 print_r($search_array);
*            echo "</pre>";
*/
			$iterate=0;
			$max=0;
			(count($search_array)>10)?$max=10:$max=count($search_array);
			if($max>0)
			{
				echo "<h2>Searches Related to ".get_search_query()."</h2>";
				while($iterate<$max)
				{
					$data=$search_array[$iterate];
					echo "<h3><a href='"."https://www.ucertify.com/courses/".$data['value'].".html' target='_blank'>".$data['label']."</a></h3>";
					$iterate++;
				}
			}			
				
			the_bootstrap_content_nav();
		else :
			get_template_part( '/partials/content', 'not-found' );
		endif;		 
		tha_content_bottom(); ?>
		<!-- bslow code sets the search textbox value to current search -->
		<input type="hidden" id="search_str" name="search_str" value="<?php echo get_search_query(); ?>"/> 
		<script>
			jQuery("#s").val(jQuery("#search_str").val());
		</script>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file search.php */
/* Location: ./wp-content/themes/uc-customized/search.php */