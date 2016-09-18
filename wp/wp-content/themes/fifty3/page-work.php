<?php
/*
 *	Fifty3
 *	Template Name: Work
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post(); ?>

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
			<button class="btn fil-cat" data-rel="identity">Brand Identity</button>
			<button class="btn fil-cat" data-rel="design">Design</button>
			<button class="btn fil-cat" data-rel="digital-cs">Digital Case Study</button>
			<button class="btn fil-cat" data-rel="photo-video">Photography/Videography</button>
			<button class="btn fil-cat" data-rel="strategy">Strategy</button>
			<button class="btn fil-cat" data-rel="website">Website</button>
		</nav>
		<div id="portfolio" class="grid">
			<a class="grid-1-3 square scale-anm all identity" href="#"></a>
			<a class="grid-1-3 square scale-anm all identity" href="#"></a>
			<a class="grid-1-3 square scale-anm all design" href="#"></a>
			<a class="grid-1-3 square scale-anm all digital-cs" href="#"></a>
			<a class="grid-1-3 square scale-anm all digital-cs" href="#"></a>
			<a class="grid-1-3 square scale-anm all digital-cs" href="#"></a>
			<a class="grid-1-3 square scale-anm all photo-video" href="#"></a>
			<a class="grid-1-3 square scale-anm all photo-video" href="#"></a>
			<a class="grid-1-3 square scale-anm all strategy" href="#"></a>
			<a class="grid-1-3 square scale-anm all website" href="#"></a>
			<a class="grid-1-3 square scale-anm all website" href="#"></a>
			<a class="grid-1-3 square scale-anm all website" href="#"></a>
		</div>
		<a class="btn" href="<? echo get_page_link(11); ?>">Meet <strong>the Brains</strong> Behind the Ideas</a>
	</div>
</section><!-- // .portfolio -->

<? endwhile;

get_footer(); ?>