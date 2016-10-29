<?php
/*
 *	Fifty3
 *	Page Banners
 */

if(is_page('home')) {?>

	<section class="banner video-bg">
		<?php while ( have_posts() ) : the_post(); ?>
			<video id="auto-video" autoplay loop muted style="background-image: url('<? bloginfo('template_directory'); ?>/img/fifty3-home-video-placeholder.jpg');">
				<source src="<?php bloginfo('template_directory'); ?>/video/fifty3-home-background-no_audio.webm" type="application/webm">
				<source src="<?php bloginfo('template_directory'); ?>/video/fifty3-home-background-no_audio.mp4" type="video/mp4">
			</video>
			<div class="wrapper">
				<?php the_field('banner_text'); ?>			
				<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
				<div id="wistia-container" class="wistia_embed wistia_async_fmno38fmqm popover=true popoverContent=html popoverPreventScroll=true"
				style="display:inline-block; white-space:nowrap;">
					<a class="play" href="#"><img src="<?php bloginfo('template_directory');?>/img/fifty3-btn-play.svg" alt="Play"></a>
				</div>
			</div>
		<?php endwhile; ?>
	</section><!-- // .banner -->

<?php } elseif(is_archive()) { ?>

	<section class="banner">
		<div class="wrapper">
			<?php
			// If localhost, then use different page ID
			if ( stristr( $_SERVER['SERVER_NAME'], 'localhost' ) ) {
				$headline = get_field('headline', 9);
			} else {
				$headline = get_field('headline', 115);
			};
			?>
			<h2><?php echo $headline; ?></h2>
		</div>
	</section><!-- // .banner -->

<?php } elseif(is_single()) { ?>

	<section class="banner">
		<div class="wrapper">
			<h2><?php the_title(); ?><br>
			<?php the_field('city'); ?>, <?php the_field('state'); ?>
			</h2>
		</div>
	</section><!-- // .banner -->

<?php } else { ?>

<section class="banner">
	<div class="wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php the_field('headline'); ?></h2>
		<?php endwhile; ?>
	</div>
</section><!-- // .banner -->

<?php }; ?>