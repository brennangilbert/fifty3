<?php
/*
 *	Fifty3
 *	Template Name: Homepage
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

?>

<? if( have_rows('services') ) : ?>
	<section>
		<div class="wrapper grid">
			<? while ( have_rows('services') ) : the_row(); ?>
				<div class="grid-1-3">
					<?
					$icon = get_sub_field('icon');
					$url = $icon['url'];
					$alt = $icon['alt'];
					?>
					<img src="<? echo $url ?>" alt="<? echo $alt ?>" width="64px" height="64px">
					<h3><? the_sub_field('title') ?></h3>
					<? if( have_rows('bullet_points') ) : ?>
						<ul class="no-bullets">
							<? while ( have_rows('bullet_points') ) : the_row(); ?>
								<li><? the_sub_field('point') ?></li>
							<? endwhile; ?>
						</ul>
					<? endif; ?>
				</div>
			<? endwhile; ?>
		</div>
		<a class="btn" href="<?php echo get_page_link(13); ?>">Our Services</a>
	</section><!-- // .col-3 -->
<? endif; ?>
<? if( get_field('about-headline') ) : ?>
	<section class="dark">
		<div class="wrapper">
			<h2><? the_field('about-headline'); ?></h2>
			<p><? the_field('about-content'); ?></p>
			<a class="btn" href="<?php echo get_page_link(7); ?>">About Us</a>
		</div>
	</section>
<? endif; ?>
<? if( get_field('portfolio-headline') ) : ?>
	<section class="portfolio">
		<div class="wrapper">
			<h2><? the_field('portfolio-headline'); ?></h2>
			<p><? the_field('portfolio-content'); ?></p>
			<? 
			// Get Projects Categorized as Featured
			$args = array('post_type' => 'work', 'cat' => 9);
			$loop = new WP_Query( $args );

			echo '<div class="grid">';

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<a class="grid-1-3 square" href="<? echo get_permalink(); ?>"><? echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'bg' ) ); ?></a>
				<? endwhile;

			echo '</div>';
			?>
			<a class="btn" href="<?php echo get_page_link(9); ?>">Our Work</a>
		</div>
	</section>
<? endif; ?>
<section class="no-padding">
	<img src="<?php bloginfo('template_directory');?>/img/fifty3-home-group.gif" alt="Fifty3 Team on Mountain" width="100%">
</section>
<section class="form">
	<div class="wrapper">
		<h2>10 Ways to <strong>Grow Your Brand</strong> in Ways That Others Aren’t</h2>
		<p>We’ll trade you. You send us your info and we’ll send you a free list detailing ways we’ve grown brands that you might not have considered yet.</p>
		<div class="wpcf7">
			<form>
				<p><span><input type="text" name="name" placeholder="NAME"></span></p>
				<p><span><input type="email" name="email" placeholder="EMAIL"></span></p>
				<p><input class="btn" type="submit" name="submit" value="SUBMIT"></p>
			</form>
		</div>
	</div>
</section><!-- // .form -->

<? get_footer(); ?>