<?php
/*
 *	Fifty3
 *	Template Name: Contact
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post(); ?>

<section class="no-padding">
	<img src="<? bloginfo('template_directory');?>/img/fifty3-background-laptop.jpg" alt="Laptop photo" width="100%">
</section>
<section class="form full-width">
	<div class="wrapper">
		<h2><? the_field('form-headline'); ?></h2>
		<p><? the_field('form-content'); ?></p>
		<div class="wpcf7">
			<form>
				<p><span><input type="text" name="name" placeholder="NAME"></span></p>
				<p><span><input type="email" name="email" placeholder="EMAIL"></span></p>
				<p><span><textarea placeholder="MESSAGE"></textarea></span></p>
				<p><input class="btn" type="submit" name="submit" value="SUBMIT"></p>
			</form>
		</div>
	</div>
</section><!-- // .form -->
<? if( have_rows('connection') ): ?>
	<section class="contact-social">
		<div class="wrapper grid">
			<? while ( have_rows('connection') ) : the_row();
				$icon = get_sub_field('icon');
				$url = $icon['url'];
				$alt = $icon['alt'];
				?>
				<a href="<? the_sub_field('url'); ?>" class="grid-1-3">
					<img src="<? echo $url ?>" alt="<? echo $alt ?>" width="64px" height="64px">
					<p><? the_sub_field('content'); ?></p>
				</a>
			<? endwhile; ?>
		</div>
	</section><!-- // .contact-social -->
<? endif; ?>
<section class="no-padding">
	<img src="<?php bloginfo('template_directory');?>/img/fifty3-background-team_mountain2.jpg" alt="Fifty3 Team on Mountain 2" width="100%">
</section>
<section>
	<div class="wrapper">
		<h3>Interested in working with us?</h3>
		<a href="<? echo get_page_link(13); ?>" class="btn">Check out <strong>Our Capabilities</strong></a>
	</div>
</section>

<? endwhile;

get_footer(); ?>