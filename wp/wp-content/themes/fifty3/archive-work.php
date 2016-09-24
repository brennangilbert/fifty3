<?php
/*
 *	Fifty3
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' ); ?>

<!-- while ( have_posts() ) : the_post(); ?> -->

<section class="video-bg">
	<video autoplay muted loop>
		<source src="<?php bloginfo('template_directory');?>/video/fifty3_in_53_seconds-no_audio.mp4" type="video/mp4">
		<!-- <source src="http://3yq63w3tvb6c1innxc1hzsya.wpengine.netdna-cdn.com/wp-content/uploads/2015/06/saastr_event_bg_2016.ogv" type="application/ogg">
		<source src="http://3yq63w3tvb6c1innxc1hzsya.wpengine.netdna-cdn.com/wp-content/uploads/2015/06/saastr_event_bg_2016.webm" type="application/webm"> -->
		<img src="<?php bloginfo('template_directory');?>/img/fifty3-work-video-placeholder.jpg">
	</video>
	<a class="play" href="https://embed-ssl.wistia.com/flash/embed_player_v2.0.swf?videoUrl=https://embed-ssl.wistia.com/deliveries/42020421534d85065e0f592e15785a56c0f996f1.bin&amp;stillUrl=https://embed-ssl.wistia.com/deliveries/96adf8fe38504a1a59d4f779a540d80b5534c0f4.bin&amp;controlsVisibleOnLoad=false&amp;unbufferedSeek=true&amp;autoLoad=false&amp;autoPlay=true&amp;endVideoBehavior=default&amp;embedServiceURL=http://distillery.wistia.com/x&amp;accountKey=wistia-production_462914&amp;mediaID=wistia-production_21665507&amp;mediaDuration=56.252&amp;fullscreenDisabled=false" data-featherlight="iframe"><img src="<?php bloginfo('template_directory');?>/img/fifty3-btn-play.svg" alt="Play"></a>
</section>
<section class="portfolio">
	<div class="wrapper">
		<nav class="filter">
			<button class="active btn fil-cat" href="" data-rel="all">All</button>
			<button class="btn fil-cat" data-rel="brand-identity">Brand Identity</button>
			<button class="btn fil-cat" data-rel="design">Design</button>
			<button class="btn fil-cat" data-rel="digital-case-study">Digital Case Study</button>
			<button class="btn fil-cat" data-rel="photography-videography">Photography/Videography</button>
			<button class="btn fil-cat" data-rel="strategy">Strategy</button>
			<button class="btn fil-cat" data-rel="website">Website</button>
		</nav>
		<? 
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
				<a class="grid-1-3 square scale-anm all <? echo $cats ?>" href="<? echo get_permalink(); ?>"><div class="text"><span><? echo the_title(); ?></span></div><? echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'bg' ) ); ?></a>
			<? endwhile;

		echo '</div>';
		?>
		<a class="btn" href="<? echo get_page_link(11); ?>">Meet <strong>the Brains</strong> Behind the Ideas</a>
	</div>
</section><!-- // .portfolio -->

<!--// endwhile; -->

<? get_footer(); ?>