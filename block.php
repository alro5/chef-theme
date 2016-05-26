<?php
   /* Template Name: block */
   ?>
<?php
   get_header();
   ?>
<div class="block">
    <?php
    if (have_rows('block_repeater')):
    while (have_rows('block_repeater')):
    the_row();
    ?>
    <div class="grid__item one-whole block__block-container">
        <div class="block__text">
            <h3>
                <?php
                the_sub_field('overskrift');
                ?>
            </h3>
            <p>
                <?php
                the_sub_field('beskrivelse');
                ?>
            </p>
            <?php
            if (have_rows('block_icon_repeater')):
            while (have_rows('block_icon_repeater')):
            the_row();
            ?>
            <div class="block__icon-container ">
                <?php
                the_sub_field('icon');
                ?>
            </div>
            <?php
            endwhile;
            else:
            endif;
            ?>
        </div>
        <div class="case__graphics block__billede" style='background-image: url("<?php
         the_sub_field('billede');
             ?>")'></div>
    </div>
    <?php
    endwhile;
    else:
    endif;
    ?>
    <?php
    if (have_rows('block_repeater2')):
    while (have_rows('block_repeater2')):
    the_row();
    ?>
    <div class="grid__item one-whole block__block-container">
        <div class="block__text">
            <h3>
                <?php
                the_sub_field('overskrift');
                ?>
            </h3>
            <p>
                <?php
                the_sub_field('beskrivelse');
                ?>
            </p>
        </div>
        <?php
        if (have_rows('image-repeater')):
        while (have_rows('image-repeater')):
        the_row();
        ?>
        <div class="case__graphics block__billede" style='background-image: url("<?php
         the_sub_field('image');
             ?>")'></div>
    </div>
</div>
   <?php
      endwhile;
      else:
      endif;
      ?>
<?php
   endwhile;
   else:
   endif;
   ?>
<div class="bg" style="background-image: url('<?php
   the_field(" baggrunds-billede");
     ?>')"></div>
<?php
   get_footer();
   ?>