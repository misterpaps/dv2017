<?php
/**
 * Template part for displaying sponsor logos.
 *
 * To be used with Paps's Logo Manager plug-in
 *
 * @package DV_Seventeen
 * @since 1.0
 * @version 1.0
 *
 */

?>

<div class="sponsors-panel">
	<div class="wrap-wide">
		<h2>Sponsors</h2>

		<div class="sponsors-panel-inner">
			
			<?php 
			$args = array( 'post_type' => 'sponsors', 'posts_per_page' => 20,'orderby'=>'menu_order','order'=>'ASC' );

			$loop = new WP_Query( $args );
			
			while ( $loop->have_posts() ) : $loop->the_post();

				$sponsor_url = get_post_meta( get_the_ID(), 'sponsor_url', true ); 
				$sponsor_name = get_the_title();
				$sponsor_tag = str_replace(' ', '-', $sponsor_name);

			 	if ( has_post_thumbnail() ) {
					
					echo '<div class="partner-logo logo-' . strtolower($sponsor_tag) . '">';
					
					if( ! empty( $sponsor_url ) ) {
		    		echo '<a href="http://'. $sponsor_url .'" title="' . $sponsor_name . '">';
			        the_post_thumbnail(); 
			    	echo '</a>';

					} else {
						  echo the_post_thumbnail();
					} 

				} else {

					echo '<div class="partner-logo text-logo">';
					
					if( ! empty( $sponsor_url ) ) {
		    		echo '<a href="http://'. $sponsor_url .'" title="' . $sponsor_name . '">';
			       echo $sponsor_name;
			    	echo '</a>';

					} else {
						  echo  $sponsor_name;
					} 
				
				}
			  // endif; 
			  echo '</div>';
			endwhile; 

			wp_reset_postdata();

			?>
		</div>	
	</div>
</div><!-- #section-sponsors -->
