<?php
/*
 *	Fifty3
 */

get_header();

/* Show Banner */
get_template_part( 'template-parts/banner' );

while ( have_posts() ) : the_post();

global $post, $post_id;
// get post by post id
$post = &get_post($post->ID);
// get post type by post
$post_type = $post->post_type;
// get post type taxonomies
$taxonomies = get_object_taxonomies($post_type);

if(get_field('video_project')) {
?>

	<section style="padding-top: 0;">
		<div class="wrapper">
			<? echo the_field('video_description');
			foreach ($taxonomies as $taxonomy) {      

		        $terms = get_the_terms( $post->ID, $taxonomy );

		        if ( $terms && ! is_wp_error( $terms ) ) :

					echo '<div class="tags">';
				 
				    foreach ( $terms as $term ) {
				    	$name = $term->name;
				    	$slug = $term->slug;
				        echo '<span class="tag ' . $slug . '">' . $name . '</span>';
				    }

				    echo '</div>';
				 
				endif;
		    }
		    if(get_field('wistia_code')) {
		    	$wistia = get_field('wistia_code');
		    	?>
		    	<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script>
				<div style="padding-top: 110px;">
					<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
						<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
							<div class="wistia_embed wistia_async_<? echo $wistia; ?> seo=false videoFoam=true" style="height:100%;width:100%">&nbsp;</div>
						</div>
					</div>
				</div>
		    <? } ?>
		</div>
	</section>

<? } else {

	if(get_field('main_image')) :
	?>

		<section class="no-padding">
			<?
			$main_image = get_field('main_image');
			$url = $main_image['url'];
			$alt = $main_image['alt'];
			?>
			<img src="<? echo $url ?>" alt="<? echo $alt ?>" style="height:auto;width:100%;">
		</section>

	<? endif;
	if(get_field('description')) :
	?>

	<section>
		<div class="wrapper">
			<h2>The Challenge</h2>
			<?
			echo the_field('description');

			// Show custom post type categories
			// http://stackoverflow.com/questions/15502811/display-current-post-custom-taxonomy-in-wordpress

		    foreach ($taxonomies as $taxonomy) {      

		        $terms = get_the_terms( $post->ID, $taxonomy );

		        if ( $terms && ! is_wp_error( $terms ) ) :

					echo '<div class="tags">';
				 
				    foreach ( $terms as $term ) {
				    	$name = $term->name;
				    	$slug = $term->slug;
				        echo '<span class="tag ' . $slug . '">' . $name . '</span>';
				    }

				    echo '</div>';
				 
				endif;
		    }
			                         
			?>
		</div>
	</section>

<? endif;

// Computer Section
if(get_field('computer_image')) :
?>

	<section class="computer">
		<div class="wrapper">
			<?
			$stripe = get_field('computer_stripe_color');
			$comp_img = get_field('computer_image');
			$url = $comp_img['url'];
			$alt = $comp_img['alt'];
			?>
			<div class="laptop">
				<img src="<?php bloginfo('template_directory');?>/img/fifty3-laptop_mockup-bottom.svg" alt="laptop bottom">
				<div class="screen">
					<img src="<? echo $url ?>" alt="<? echo $alt ?>">
				</div>
			</div>
		</div>
		<div class="stripe" style="background-color:<? echo $stripe ?>;"></div>
		
		<? if(get_field('project_website_url')) : ?>
			<a class="btn" href="<? echo get_field('project_website_url'); ?>">Visit Website</a>
			<style>
				.computer .btn {border-color:<? echo $stripe ?>;}
				.computer .btn:hover {background-color:<? echo $stripe ?>;}
			</style>
		<? endif; ?>

	</section>

<? endif;
if(get_field('prep_description')) :
?>

	<section class="preparation">
		<div class="wrapper">
			<h2>The Preparation</h2>
			<? echo the_field('prep_description'); ?>
		</div>
		<?
		if(have_rows('prep_images')) :

			echo '<div class="images">';

				while ( have_rows('prep_images') ) : the_row();
					$img = get_sub_field('image');
					$url = $img['url'];
					$alt = $img['alt'];
					$cap = $img['caption'];
					$svg = get_sub_field('svg_width');

					if(get_sub_field('full-width')) {
						if($cap) { echo '<small>' . $cap . '</small>'; }; ?>
						<img class="full" src="<? echo $url ?>" alt="<? echo $alt ?>">
					<? } else {
						if($cap) { echo '<small>' . $cap . '</small>'; }; ?>
						<img class="not-full" src="<? echo $url ?>" alt="<? echo $alt ?>" width="<? echo $svg ?>">
					<? };
				endwhile;

			echo '</div>';

		endif; ?>
	</section>

<? endif;
if(get_field('sol_description')) :
?>
	
	<section class="solution">
		<div class="wrapper">
			<h2>The Solution</h2>
			<? echo the_field('sol_description'); ?>
		</div>
		<?
		if(have_rows('sol_images')) :

			echo '<div class="images">';

				while ( have_rows('sol_images') ) : the_row();
					$img = get_sub_field('image');
					$url = $img['url'];
					$alt = $img['alt'];
					$cap = $img['caption'];
					$svg = get_sub_field('svg_width');

					if(get_sub_field('full-width')) {
						if($cap) { echo '<small>' . $cap . '</small>'; }; ?>
						<img class="full" src="<? echo $url ?>" alt="<? echo $alt ?>">
					<? } else {
						if($cap) { echo '<small>' . $cap . '</small>'; }; ?>
						<img class="not-full" src="<? echo $url ?>" alt="<? echo $alt ?>" width="<? echo $svg ?>">
					<? };
				endwhile;

			echo '</div>';

		endif; ?>
	</section>

<? endif;
if(get_field('wrap_up_headline')) :
?>

	<section class="wrap-up">
		<div class="wrapper">
			<h2><? echo the_field('wrap_up_headline'); ?></h2>
		</div>
		<?
		if(have_rows('wrap_up_images')) :

			echo '<div class="images">';

				while ( have_rows('wrap_up_images') ) : the_row();
					$img = get_sub_field('image');
					$url = $img['url'];
					$alt = $img['alt'];
					$cap = $img['caption'];
					$svg = get_sub_field('svg_width');

					if(get_sub_field('full-width')) {
						if($cap) { echo '<small>' . $cap . '</small>'; }; ?>
						<img class="full" src="<? echo $url ?>" alt="<? echo $alt ?>">
					<? } else {
						if($cap) { echo '<small>' . $cap . '</small>'; }; ?>
						<img class="not-full" src="<? echo $url ?>" alt="<? echo $alt ?>" width="<? echo $svg ?>">
					<? };
				endwhile;

			echo '</div>';

		endif; ?>
	</section>

<? endif;
};
?>

<section class="end">
	<div class="wrapper">
		<?
		// Exclude Uncategorized and Featured based on Local vs Live
		if ( stristr( $_SERVER['SERVER_NAME'], 'localhost' ) ) {
			$btnlink = get_page_link(9);
		} else {
			$btnlink = get_page_link(115);
		};
		$trimmed = rtrim($btnlink, '/');
		?>
		<a class="btn" href="<? echo $trimmed; ?>#portfolio-section">See More <strong>Work</strong> We've Done</a>
	</div>
</section><!-- // .portfolio -->

<? endwhile;

get_footer(); ?>