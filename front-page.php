<?php get_header(); ?>
		<div id="wrap" class="wrap">
			<img class="mockup__img" src="<?php the_field("baggrunds_billede") ?>" />
			<div class="mockup">
				<div id="mobile" class="mobile">
					<ul id="slideshow" class="slideshow">
						<?php
							if( have_rows('device_slides') ):
							    while ( have_rows('device_slides') ) : the_row(); ?>
									<li class="slideshow__item"><img src="<?php the_sub_field('image') ?>" /></li>
								<?php endwhile;
							else :
						endif;
						?>		
					</ul>
				</div>
			</div>
		</div>
		<div class="landing">
			<div>
				<div class="centered--half">
					<h2><?php the_field('intro_overskrift') ?></h2>
					<p><?php the_field('intro_tekst') ?></p>
		        	<a class="button button--cases"><?php the_field('cases_link') ?></a>
	        	</div>			
			</div>
		</div>
		<div class="grid bg--primary">
			<div class="centered section">
				<?php
				if( have_rows('skills') ):
				    while ( have_rows('skills') ) : the_row(); ?>
				        <a href="<?php the_sub_field('skill_link') ?>" class="grid__item one-quarter palm--one-whole lap--one-half text--center color--white skill spacing-unit--single">
				        	<i class="fa <?php the_sub_field('skill_icon'); ?>"></i>
				        	<h5><?php the_sub_field('skill_headline') ?></h5>
				        	<p><?php the_sub_field('skill_description') ?></p>
			        	</a>	
				    <?php endwhile;
				else :
				endif;
				?>
			</div>
		</div>
		<div class="grid cases slide__section">
			<div class="button--close">
				<span></span>
				<span></span>
			</div>
			<div class="inner">
				<?php
				if( have_rows('cases') ):
				    while ( have_rows('cases') ) : the_row(); ?>
				        <div class="grid__item case__item">
				        	<div class="case__graphics" style='background-image: url("<?php the_sub_field('case_billede') ?>")'></div>
				        	<div class="case__text">
					        	<h3><?php the_sub_field('case_title') ?></h3>
					        	<p><span><?php the_sub_field('case_beskrivelse') ?></span></p>
					        	<a href="<?php the_sub_field('case_link') ?>" class="button--case">Se case</a>
				        	</div>
				        </div>	

				    <?php endwhile;

				else :
				endif;
				?>
			</div>
		</div>
<!-- 		<div class="bg" style="background-image: url('<?php the_field("baggrunds_billede") ?>')"></div> -->
<?php get_footer(); ?>