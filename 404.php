	<?php 
	
	/*************
	 * @package  		 WpF ultraResponsive
	 * @file     		 404.php
	 * @author   		 WpFreeware
	 * @Author Link 	 http://wpfreeware.com
	 * @license	 		 GPL 3.0 or Later
	 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
	 ***************/		
	
	get_header();?>
	

    
    <!--=========== BEGIN CONTENT SECTION ================-->
	
    <section id="errorpage">
      <div class="container">
	  
        <div class="error_page_content">
             <h2><?php _e('Lame!!!', 'wpf-ultraresponsive'); ?></h2>
                        <h3><?php _e('There are no stories here, except in that video! ', 'wpf-ultraresponsive'); ?></h3>
             <p class="wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;"><?php printf( __('Please search for some better stories below, continue to the <a href="%1$s">blog</a> or watch the video below.', 'wpf-ultraresponsive'), esc_url( home_url( '/' ) ) ); ?>
<iframe width="560" height="315" src="https://www.youtube.com/embed/nlcULbWeNk8" frameborder="0" allowfullscreen></iframe>

</p>
			 
			<div class="clearfix"></div>
			<div class="search_form">
				<?php get_search_form(); ?>
			</div>
		
        </div>
		
      </div>
    </section>	
	
	
    <!--=========== END CONTENT SECTION ================-->
    
	<?php get_footer();?>