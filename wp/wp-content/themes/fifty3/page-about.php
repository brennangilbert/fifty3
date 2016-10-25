<?php
/*
 *	Fifty3
 *	Template Name: About
 */

get_header();

// Links Local vs Live
if ( stristr( $_SERVER['SERVER_NAME'], 'localhost' ) ) {
	$work_link = get_page_link(9);
} else {
	$work_link = get_page_link(115);
};

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post(); ?>

<section class="video-bg">
	<video id="auto-video" autoplay muted style="background-image: url('<?php bloginfo('template_directory'); ?>/img/fifty3-about-video-placeholder.jpg');">
		<source src="<?php bloginfo('template_directory'); ?>/video/fifty3-about-background-no_audio.webm" type="application/webm">
		<source src="<?php bloginfo('template_directory'); ?>/video/fifty3-about-background-no_audio.mp4" type="video/mp4">
		<source src="<?php bloginfo('template_directory'); ?>/video/fifty3-about-background-no_audio.ogv" type="video/ogv">
	</video>
	<img src="<?php bloginfo('template_directory'); ?>/img/fifty3-about-video-placeholder.jpg">
</section>
<section class="how-we-stand-above">
	<div class="wrapper">
		<h2><?php the_field('d-headline'); ?></h2>
		<?php if( have_rows('reasons') ): ?>
			<div class="grid">
				<?php while ( have_rows('reasons') ) : the_row(); ?>
					<div class="grid-1-3">
						<?php
						$icon = get_sub_field('icon');
						$url = $icon['url'];
						$alt = $icon['alt'];
						?>
						<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="64px" height="64px">
						<h4><?php the_sub_field('headline'); ?></h4>
						<p><?php the_sub_field('description'); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php if(get_field('def-headline') || the_field('def-description') ) : ?>
	<section class="dark">
		<div class="wrapper">
			<h2><?php the_field('def-headline'); ?></h2>
			<p><?php the_field('def-description'); ?></p>
		</div>
	</section>
<?php endif ?>
<section class="reasons">
	<div class="wrapper">
		<h2><?php the_field('53-headline'); ?></h2>
		<?php
		$rows = get_field('53-reasons');
		$row_count = count($rows);
		if( have_rows('53-reasons') ):
			$i = 0;
		?>
			<div id="slideshow" class="reason-wrapper">
				<?php while ( have_rows('53-reasons') ) : the_row(); ?>
					<?php
					if( get_sub_field('image') ) $i++;
						$image = get_sub_field('image');
						$url = $image['url'];
						$alt = $image['alt'];
						$count = $i;
					?>
					<div class="reason not-shown" style="display: none;">
						<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="64px" height="64px">
						<p><strong>Reason #<?php echo $count; ?>:</strong> <?php the_sub_field('content'); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
<section class="map">
	<div class="wrapper">
		<h2><?php the_field('map-headline'); ?></h2>
		<p><?php the_field('map-content'); ?></p>
		<div id="map"></div>
		<?php if( get_field('states') ): ?>
			<div class="state-info">
				<?php while ( has_sub_field('states') ) :
					$state = get_sub_field_object('state_name');
					$value = get_sub_field('state_name');
					$state_abbr = 'info-' . $value;
					$label = $state['choices'][ $value ];
				?>
					<div id="<?php echo $state_abbr ?>">
						<h3><?php echo $label ?></h3>
						<div class="grid">

							<?php
							if( have_rows('logos') ):
								while( have_rows('logos') ): the_row();
									
									if( get_sub_field('logo') ) :

										$image = get_sub_field('logo');
										$url = $image['url'];
										$alt = $image['alt'];

										// If a portfolio project exists, link to it, otherwise link to the Work page
										$project = get_sub_field('link_to_project');
										$link = $work_link;

										if( $project ) {
											$link = get_permalink($project->ID);
										};

										echo '<div class="square grid-1-4">';
											echo '<a href="' . $link . '"><img src="' . $url . '" alt="' . $alt . '"></a>';
										echo '</div>';

									endif;

								endwhile;
								echo $counter;
							endif;
							?>

						</div><!-- // .grid -->
					</div>
				<?php endwhile; ?>
			</div><!-- // .state-info -->
		<?php endif; ?>
		<div class="clients">
			<h3><?php the_field('clients-headline'); ?></h3>
			<?php if( get_field('client-state') ): ?>
				<div class="grid">
					<?php while ( has_sub_field('client-state') ) :
						$state = get_sub_field_object('state');
						$value = get_sub_field('state');
						$label = $state['choices'][ $value ];
					?>
					<div class="grid-1-2 client-state">
						<strong><?php echo $label ?></strong>
						<?php if( have_rows('property') ):
							echo '<ul>';
							while( have_rows('property') ): the_row(); ?>
								<li><?php the_sub_field("name") ?> | <?php the_sub_field("city") ?>, <?php echo $value ?></li>
							<?php endwhile;
							echo '</ul>';
						endif; ?>
					</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div><!-- // .clients -->
		<a class="btn" href="<?php echo $work_link; ?>">See Examples of the <strong>Work</strong> We've Done</a>
	</div><!-- // .wrapper -->
</section><!-- // .map -->

<?php endwhile;

get_footer(); ?>