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
			<a class="play" href="<?php the_field('lightbox_video_url'); ?>" data-featherlight="iframe"><img src="<?php bloginfo('template_directory');?>/img/fifty3-btn-play.svg" alt="Play"></a>
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