<?php
/*
 *	Fifty3
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' ); ?>

<!-- while ( have_posts() ) : the_post(); ?> -->

<section class="video-bg">
	<video id="auto-video" autoplay loop muted style="background-image: url('<?php bloginfo('template_directory'); ?>/img/fifty3-work-video-placeholder.jpg');">
		<source src="<?php bloginfo('template_directory'); ?>/video/fifty3_in_53_seconds-no_audio.webm" type="application/webm">
		<source src="<?php bloginfo('template_directory'); ?>/video/fifty3_in_53_seconds-no_audio.mp4" type="video/mp4">
		<source src="<?php bloginfo('template_directory'); ?>/video/fifty3_in_53_seconds-no_audio.ogv" type="video/ogv">
	</video>
	<img src="<?php bloginfo('template_directory'); ?>/img/fifty3-work-video-placeholder.jpg">
	<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
	<div id="wistia-container" class="wistia_embed wistia_async_ntj3nh0g96 popover=true popoverContent=html popoverPreventScroll=true"
	style="display:inline-block; white-space:nowrap;">
		<a class="play" href="#"><img src="<?php bloginfo('template_directory');?>/img/fifty3-btn-play.svg" alt="Play"></a>
	</div>
</section>
<section class="portfolio" id="portfolio-section">
	<div class="wrapper">
		<nav class="filter">
			<button class="active btn fil-cat" data-rel="all">All</button>
			<?php
			// Exclude Uncategorized and Featured based on Local vs Live
			if ( stristr( $_SERVER['SERVER_NAME'], 'localhost' ) ) {
				$exclusions = '1 9';
			} else {
				$exclusions = '1 5';
			};
			$terms = get_terms( array(
			    'taxonomy' => 'category',
			    'exclude' => $exclusions
			) );
			                         
			if ( $terms && ! is_wp_error( $terms ) ) :
			 
			    foreach ( $terms as $term ) {
			        echo '<button class="btn fil-cat" data-rel="' . $term->slug . '">' . $term->name . '</button>';
			    }
			 
			endif;
			?>
		</nav>
		<?php 
		// Get Projects
		$args = array('post_type' => 'work');
		$loop = new WP_Query( $args );

		echo '<div id="portfolio" class="grid">';

			// Get categories as slugs to add as classes
			while ( $loop->have_posts() ) : $loop->the_post();
				$categories = get_categories();
				$i = 0;
				$sep = ' ';
				$cats = '';
				foreach ( ( get_the_category() ) as $category ) {
					if (0 < $i) $cats .= $sep;
					$cats .= $category->slug;
					$i++;
				}

			?>
				<a class="grid-1-3 square scale-anm all <?php echo $cats ?>" href="<?php echo get_permalink(); ?>"><div class="text"><span><?php echo the_title(); ?></span></div><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'bg' ) ); ?></a>
			<?php endwhile;

		echo '</div>';
		?>
		<a class="btn" href="<?php echo get_page_link(11); ?>">Meet <strong>the Brains</strong> Behind the Ideas</a>
	</div>
</section><!-- // .portfolio -->

<!--// endwhile; -->

<?php get_footer(); ?>