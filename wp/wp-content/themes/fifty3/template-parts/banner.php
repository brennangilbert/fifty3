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

<? } elseif(is_archive()) { ?>

	<section class="banner">
		<div class="wrapper">
			<h2><?php the_field('headline', 9); ?></h2>
		</div>
	</section><!-- // .banner -->

<? } elseif(is_single()) { ?>

	<section class="banner">
		<div class="wrapper">
			<h2><?php the_title(); ?><br>
			<?php the_field('city'); ?>, <?php the_field('state'); ?>
			</h2>
		</div>
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