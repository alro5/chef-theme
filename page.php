<?php
/*
	Template Name: Booking template
*/
?>
<?php get_header(); ?>
	<div class="centered">
		<div class="page-content bg--white">
			<div class="grid">
			    <div class="grid__item one-whole padding-unit--single">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<?php
				if( have_rows('booking_items') ):
				    while ( have_rows('booking_items') ) : the_row(); ?>
						<div class="one-whole case__row">
					        <div class="case__description">
								<h4><?php the_sub_field('overskrift') ?></h4>
								<p><?php the_sub_field('tekst') ?></p>
					        </div>
							<div class="case__description">
								<img src="<?php the_sub_field('billede') ?>">
							</div>
							<div class="cf"></div>
						</div>
				    <?php endwhile;
				else :
				endif;
			?>
			
		</div>
	</div>
	<div class="bg" style="background-image: url('<?php the_field("baggrunds_billede") ?>')"></div>
<?php get_footer(); ?>