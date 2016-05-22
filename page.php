<?php
/*
	Template Name: Booking template
*/
?>
<?php get_header(); ?>
	<div class="centered">
		<div class="page-content bg--white">
			<div class="grid">
			    <div class="grid__item two-thirds padding-unit--single">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div>
						<?php the_field('tekst'); ?>
					</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="grid__item one-third">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bg" style="background-image: url('<?php the_field("baggrunds_billede") ?>')"></div>
<?php get_footer(); ?>