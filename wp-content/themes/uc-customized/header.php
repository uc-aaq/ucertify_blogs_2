<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Om Ji Verma
 * @package		uCertify Customized
 * @since		1.0 - 02.02.2018
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		
		<?php tha_head_top(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
		<?php tha_head_bottom(); ?>
		<?php wp_head(); ?>
	</head>  
	  
	<body <?php body_class('uc-bg'); ?>>
		<div class="container-fluid">
			<div class="container nav-width">
				<div class="row">
					<hgroup>
						<span>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<span class="logo"><img src="<?php echo site_url() ?>/wp-content/themes/uc-customized/img/blog-logo.png" /></span>
							</a>
						</span>
					</hgroup>
				</div>
			</div>
		</div>
		<div <?php the_bootstrap_navbar_class(); ?> id="titlebar">
			<div class="container-fluid navbar-inner">
				<div class="container">
					<div class="nav-width" id="navbar">
						<div class="row">
							<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<?php if ( the_bootstrap_options()->navbar_site_name ) : ?>
							<span class="brand"><?php bloginfo( 'name' ); ?></span>
							<?php endif;?>
							<div class="nav-collapse">
								<?php
									 wp_nav_menu( array(
									'theme_location'	=>	'primary',
									'menu_class'		=>	'nav nav-tabs',
									'depth'				=>	3,
									'fallback_cb'		=>	false,
									'walker'			=>	new The_Bootstrap_Nav_Walker,
								) ); 
								?>
						      <ul class="nav navbar-nav" id="mainnav">					      	
								<li id="first-drop">
								   <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="shop_by_ucertify"><span class="text-small">Browse</span><span class="text-large">Titles</span> <span class="caret"></span></a>
								   <!-- File Name: 'shop_main_menu.tpl' -->
								   <ul class="topMenu dropdown-menu nm np">
								      <li class="first nm">
								         <ul class="nav_shop list-unstyled">
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/courses/" class="nh pl-md pr-md">Titles Advisor</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/Microsoft.html" class="nh pl-md pr-md">Microsoft</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/Oracle.html" class="nh pl-md pr-md">Oracle</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/Cisco.html" class="nh pl-md pr-md">Cisco</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/CompTIA.html" class="nh pl-md pr-md">CompTIA</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/CIW.html" class="nh pl-md pr-md">CIW</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/Adobe.html" class="nh pl-md pr-md">Adobe</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/PMI.html" class="nh pl-md pr-md">PMI<sup>&reg;</sup>/ITIL<sup>&reg;</sup></a>
								             </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/ISC2.html" class="nh pl-md pr-md">ISC-2</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/EC-Council.html" class="nh pl-md pr-md">EC-Council</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/LPI.html" class="nh pl-md pr-md">LPI/Linux</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/ISACA.html" class="nh pl-md pr-md">ISACA</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/Zend.html" title="php certification" class="nh pl-md pr-md">Zend</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/IIBA.html" class="nh pl-md pr-md">IIBA<sup>&copy;</sup></a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/VMWare.html" class="nh pl-md pr-md">VMWare</a>
								            </li>
								            <li class="nav_hover pt-sm pb-sm">
								               <a href="https://www.ucertify.com/vendors/Certiport.html" class="nh pl-md pr-md">IC3</a>
								            </li>
								            <li id="" class="nav_hover pt-sm pb-sm">
								               <a href="javascript:;" class="nh pl-md pr-md">More...</a>
								            </li>
								         </ul>
								      </li>
								   </ul>
								</li>																							      
								<li class="dropdown hidden-sm">
					    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="testprep_advisor_menu"><span class="text-small">Title</span><span class="text-large">Advisor</span> <b class="caret"></b></a>
				    			<!-- File Name: 'pe-menubar-courses.tpl' -->
									<ul class="dropdown-menu nm title-advisor">
										<li><a href="https://www.ucertify.com/courses/" id="course" >Title Advisor</a></li>
										<li><a href="https://www.ucertify.com/courses/updated.html" id="course" >Updated Titles</a></li>
										<li><a href="https://www.ucertify.com/courses/new.html" >New Titles </a></li>
										<li><a href="https://www.ucertify.com/features/" >Features</a></li>
										<li class="show_advisor_option h"><a href="#" class="show_advisor">Hide Advisor</a></li>
										<!-- need to confirm before changing language files if these variables are not being used elsewhere -->
										<!-- <li><a href="https://www.ucertify.com/courses/" id="course" >Course Advisor</a></li>
										<li><a href="https://www.ucertify.com/courses/updated.html" id="course" >Updated Courses</a></li>
										<li><a href="https://www.ucertify.com/courses/new.html" >New Courses </a></li>
										<li><a href="https://www.ucertify.com/features/" >Features</a></li> -->
									</ul>				
								</li>
								<li class="dropdown hidden-sm">
					    			<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="support_menu"><span class="text-small">Features &</span><span class="text-large">Support</span> <b class="caret"></b></a>
									<ul class="dropdown-menu nm support-advisor">
										<li><a href="https://www.ucertify.com/features/" id="features" >Features</a></li>
										<li><a href="https://www.ucertify.com/support.php" id="support" >Support</a></li>
									</ul>				
								</li>
						      	<li>
						      		<a href="https://www.ucertify.com"><span class="text-small">Home</span><span class="text-large">uCertify</span></a>	
						      	</li>						
							</ul>
							<ul class="pull-right list-unstyled" id="big-search">
								<li>											
    					    		<div class="">
										<form method="get" id="searchform" class="form-search pull-right" action="<?php echo esc_url( home_url( '/' ) ); ?>">
											<label for="s" class="assistive-text hidden"><?php _e( 'Search', 'uc-customized' ); ?></label>
											<div class="input-append">
												<input id="s" class="span3 search-query navsearch" type="search" name="s" placeholder="<?php esc_attr_e( 'Search', 'uc-customized' ); ?>">
												<button class="btn btn-inverse" name="submit" id="searchsubmit" type="submit"><?php _e( 'Go', 'uc-customized' ); ?></button>
					 						</div>																		
										</form>
									</div>
								</li>						
							</ul>						      						
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>		
		<script>
			$(document).ready(function(){			
				$('#shop_by_ucertify').mouseenter( function() {
					$('.nav_shop-subhead').css("display","none");
				});
				$(".nav_hover").on('mouseover',function(){
					$(this).find('ul').fadeIn(0);
				});		
				$(".nav_hover").on('mouseout',function(){
					$(this).find('ul').fadeOut(0);
				});										
			});
		</script>	
		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-86319-21"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-86319-21');
        </script>			
		<div class="container">
			<div id="page" class="hfeed row" style="margin-top:-15px;">
				<?php tha_header_before(); ?>
				<header id="branding" role="banner" class="span12">
					<?php tha_header_top();
					wp_nav_menu( array(
						'container'			=>	'nav',
						'container_class'	=>	'subnav clearfix',
						'theme_location'	=>	'header-menu',
						'menu_class'		=>	'nav nav-pills pull-right',
						'depth'				=>	3,
						'fallback_cb'		=>	false,
						'walker'			=>	new The_Bootstrap_Nav_Walker,
					) ); ?>
					
					
					<?php if ( get_header_image() ) : ?>
					<a id="header-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
					</a>
					<?php endif; // if ( get_header_image() ) ?>

					<nav id="access" role="navigation">
						<h3 class="assistive-text"><?php _e( 'Main menu', 'uc-customized' ); ?></h3>
						<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'uc-customized' ); ?>"><?php _e( 'Skip to primary content', 'uc-customized' ); ?></a></div>
						<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'uc-customized' ); ?>"><?php _e( 'Skip to secondary content', 'uc-customized' ); ?></a></div>
						<?php if ( has_nav_menu( 'primary' ) OR the_bootstrap_options()->navbar_site_name OR the_bootstrap_options()->navbar_searchform ) : ?>
						
						<?php endif; ?>
					</nav><!-- #access -->
					<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
						yoast_breadcrumb( '<nav id="breadcrumb" class="breadcrumb">', '</nav>' );
					}
					tha_header_bottom(); ?>
				</header><!-- #branding -->
				<?php
				tha_header_after();
				
		
/* End of file header.php */
/* Location: ./wp-content/themes/uc-customized/header.php */
