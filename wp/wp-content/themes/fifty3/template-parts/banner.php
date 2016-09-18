<?php
/*
 *	Fifty3
 *	Page Banners
 */

if(is_page('home')) {?>

<section class="banner video-bg">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_field('background_video'); ?>
		<div class="wrapper">
			<?php the_field('banner_text'); ?>			
			<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
			<div class="wistia_embed wistia_async_fmno38fmqm popover=true popoverContent=html"
			style="display:inline-block; white-space:nowrap;">
				<a class="play" href="#"><img src="<?php bloginfo('template_directory');?>/img/fifty3-btn-play.svg" alt="Play"></a>
			</div>
		</div>
	<?php endwhile; ?>
</section><!-- // .banner -->

<? } else { ?>

<section class="banner">
	<div class="wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_field('headline'); ?></h2>
		<?php endwhile; ?>
	</div>
</section><!-- // .banner -->

<? }; ?>