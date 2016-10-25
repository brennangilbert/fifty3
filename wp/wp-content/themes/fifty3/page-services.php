<?php
/*
 *	Fifty3
 *	Template Name: Services
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post(); ?>

<section class="video-bg">
	<video id="auto-video" autoplay loop muted style="background-image: url('<? bloginfo('template_directory'); ?>/img/fifty3-services-video-placeholder.jpg');">
		<source src="<? bloginfo('template_directory'); ?>/video/fifty3-services-drawing.webm" type="application/webm">
		<source src="<? bloginfo('template_directory'); ?>/video/fifty3-services-drawing.mp4" type="video/mp4">
		<source src="<? bloginfo('template_directory'); ?>/video/fifty3-services-drawing.ogv" type="video/ogv">
	</video>
	<img src="<? bloginfo('template_directory'); ?>/img/fifty3-services-video-placeholder.jpg">
</section>
<section class="service-details">
	<div class="wrapper">
		<h2><? the_field('services-headline'); ?></h2>
		<p><? the_field('services-content'); ?></p>
		<? if( have_rows('service') ) : ?>
			<div class="grid light">
				<? while ( have_rows('service') ) : the_row();
					$icon = get_sub_field('icon');
					$url = $icon['url'];
					$alt = $icon['alt'];
					?>
					<div class="grid-1-3 square centered">
						<div>
							<div>
								<img src="<? echo $url ?>" alt="<? echo $alt ?>" width="64px" height="64px">
								<h4><? the_sub_field('title'); ?></h4>
							</div>
							<? if( have_rows('bullet_points') ) : ?>
								<ul class="no-bullets">
									<? while ( have_rows('bullet_points') ) : the_row(); ?>
										<li><? the_sub_field('point'); ?></li>
									<? endwhile; ?>
								</ul>
							<? endif; ?>
						</div>
					</div>
				<? endwhile; ?>
			</div><!-- // .grid -->
		<? endif; ?>
	</div>
</section><!-- // .service-details -->
<section class="form">
	<div class="wrapper">
		<h2><? the_field('menu-headline'); ?></h2>
		<p><? the_field('menu-content'); ?></p>
		<? if( have_rows('menu-pdfs') ) : ?>
			<ul class="list-links">
				<? while ( have_rows('menu-pdfs') ) : the_row(); ?>
					<li><a href="<? the_sub_field('file'); ?>" target="_blank"><? the_sub_field('title'); ?></a></li>
				<? endwhile; ?>
			</ul>
		<? endif;

		if( the_field('menu-subhead') ) :
			echo '<p>' . the_field('menu-subhead') . '</p>';
		endif;

		if( get_field('menu-form')) :
			the_field('menu-form');
		endif;
		?>
<!-- 			<div class="wpcf7">
				<form>
					<p><span><input type="text" name="name" placeholder="NAME"></span></p>
					<p><span><input type="email" name="email" placeholder="EMAIL"></span></p>
					<p><input class="btn" type="submit" name="submit" value="SUBMIT"></p>
				</form>
			</div> -->
	</div>
</section><!-- // .form -->
<section class="no-padding">
	<img src="<?php bloginfo('template_directory');?>/img/fifty3-background-lauren.jpg" alt="Working on Computer" width="100%">
</section>
<section>
	<div class="wrapper">
		<a class="btn" href="<? echo get_page_link(7); ?>">Learn More <strong>About Us</strong></a>
	</div>
</section>

<? endwhile;

get_footer(); ?>