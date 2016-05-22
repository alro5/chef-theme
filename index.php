<?php get_header(); ?>
	<div class="grid">
	    <div class="grid__item two-thirds">
			<?php if ( have_posts() ) : ?>
				<div class="grid">
			    <?php while ( have_posts() ) : the_post(); ?>
			        <h1><?php the_title(); ?></h1>

						<?php

						// check if the repeater field has rows of data
						if( have_rows('list') ):

						 	// loop through the rows of data
						    while ( have_rows('list') ) : the_row(); ?>
								
								<div class="grid__item one-half">
							        <p><?php the_sub_field('beskrivelse'); ?></p>
							        <img src="<?php the_sub_field('billede'); ?>" alt="<?php the_sub_field('billede'); ?>" />
							        <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link'); ?></a>
								</div>
						   <?php endwhile; ?>

						<?php else :

						    // no rows found

						endif;

						?>
					
			   <?php endwhile; ?>
			   </div>
			<?php endif; ?>
			
		</div>
		<div class="grid__item one-third">
			<div class="sidebar">
				Lorizzle ipsizzle dolor sit amet, get down get down adipiscing elit. Fo shizzle my nizzle dizzle velizzle, break it down volutpizzle, suscipit quizzle, daahng dawg vel, arcu. Pellentesque ass for sure. Sed erizzle. For sure at dolizzle dapibizzle turpizzle tempizzle break it down. Maurizzle bling bling nibh shiz dawg. Uhuh … yih! izzle i saw beyonces tizzles and my pizzle went crizzle. Pellentesque fo shizzle my nizzle rhoncus sheezy. In dawg habitasse break it down things. Ass dapibizzle. Curabitizzle dope urna, pretizzle da bomb, mattizzle ac, fo shizzle vitae, nunc. Shizzlin dizzle suscipizzle. Integizzle bow wow wow velizzle sed bow wow wow.
			</div>
		</div>
	</div>
<?php get_footer(); ?>