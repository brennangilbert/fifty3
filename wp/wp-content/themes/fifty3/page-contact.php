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
	<?php
	$banner_img = get_field('banner_image');
	$b_url = $banner_img['url'];
	$b_alt = $banner_img['alt'];

	if(get_field('banner_image')) { ?>
		<img src="<?php echo $b_url ?>" alt="<?php echo $b_alt ?>" width="100%">
	<?php } else { ?>
		<img src="<?php bloginfo('template_directory');?>/img/fifty3-background-laptop.jpg" alt="Laptop photo" width="100%">
	<?php }; ?>
</section>
<section class="form full-width">
	<div class="wrapper">
		<h2><?php the_field('form-headline'); ?></h2>
		<p><?php the_field('form-content'); ?></p>
		<?php if(get_field('contact_form')) :
			the_field('contact_form');
		endif; ?>
	</div>
</section><!-- // .form -->
<?php if( have_rows('connection') ): ?>
	<section class="contact-social">
		<div class="wrapper grid">
			<?php while ( have_rows('connection') ) : the_row();
				$icon = get_sub_field('icon');
				$url = $icon['url'];
				$alt = $icon['alt'];
				?>
				<a href="<?php the_sub_field('url'); ?>" class="grid-1-3">
					<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="64px" height="64px">
					<p><?php the_sub_field('content'); ?></p>
				</a>
			<?php endwhile; ?>
		</div>
	</section><!-- // .contact-social -->
<?php endif; ?>
<section class="no-padding">
	<img src="<?php bloginfo('template_directory');?>/img/fifty3-background-team_mountain2.jpg" alt="Fifty3 Team on Mountain 2" width="100%">
</section>
<section>
	<div class="wrapper">
		<h3>Interested in working with us?</h3>
		<a href="<?php echo get_page_link(13); ?>" class="btn">Check out <strong>Our Capabilities</strong></a>
	</div>
</section>

<?php endwhile;

get_footer(); ?>