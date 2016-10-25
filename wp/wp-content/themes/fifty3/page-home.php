<?php
/*
 *	Fifty3
 *	Template Name: Homepage
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

?>

<?php if( have_rows('services') ) : ?>
	<section>
		<div class="wrapper grid">
			<?php while ( have_rows('services') ) : the_row(); ?>
				<div class="grid-1-3">
					<?php
					$icon = get_sub_field('icon');
					$url = $icon['url'];
					$alt = $icon['alt'];
					?>
					<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="64px" height="64px">
					<h3><?php the_sub_field('title') ?></h3>
					<?php if( have_rows('bullet_points') ) : ?>
						<ul class="no-bullets">
							<?php while ( have_rows('bullet_points') ) : the_row(); ?>
								<li><?php the_sub_field('point') ?></li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		</div>
		<a class="btn" href="<?php echo get_page_link(13); ?>">Our Services</a>
	</section><!-- // .col-3 -->
<?php endif; ?>
<?php if( get_field('about-headline') ) : ?>
	<section class="dark">
		<div class="wrapper">
			<h2><?php the_field('about-headline'); ?></h2>
			<p><?php the_field('about-content'); ?></p>
			<a class="btn" href="<?php echo get_page_link(7); ?>">About Us</a>
		</div>
	</section>
<?php endif; ?>
<?php if( get_field('portfolio-headline') ) : ?>
	<section class="portfolio">
		<div class="wrapper">
			<h2><?php the_field('portfolio-headline'); ?></h2>
			<p><?php the_field('portfolio-content'); ?></p>
			<?php 
			// Get Projects Categorized as Featured
			$args = array('post_type' => 'work', 'taxonomy' => 'featured');
			$loop = new WP_Query( $args );

			echo '<div id="portfolio" class="grid">';

				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<a class="grid-1-3 square" href="<?php echo get_permalink(); ?>"><div class="text"><span><?php echo the_title(); ?></span></div><?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'bg' ) ); ?></a>
				<?php endwhile;
				
				wp_reset_query();

			echo '</div>';
			?>
			<a class="btn" href="<?php echo get_page_link(115); ?>">Our Work</a>
		</div>
	</section>
<?php endif; ?>
<section class="no-padding">
	<img src="<?php bloginfo('template_directory');?>/img/fifty3-home-group.gif" alt="Fifty3 Team on Mountain" width="100%">
</section>

<?php if( get_field('form-headline') ) : ?>
	<section class="form">
		<div class="wrapper">
			<h2><?php the_field('form-headline'); ?></h2>
			<p><?php the_field('form-content'); ?></p>
			<?php the_field('form'); ?>
		</div>
	</section><!-- // .form -->
<?php endif; ?>

<?php get_footer(); ?>