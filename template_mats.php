<?php
/* Template Name: Mats */
get_header();

?>
<section class="mats">
    <div class="mats__left-top dis">
        <img src="<?php bloginfo('template_directory'); ?>/images/mata-arkadiusz-mazurkiewicz.jpg" alt="Maty Arkadiusz Mazurkiewicz">
    </div>
    <div class="mats__right-top dis">

        <h3>“<?php pll_e('Mats Header'); ?>”</h3> <br>
        <?php pll_e('Descript 1'); ?>

    </div>
    <div class="mats__left-bottom dis">
        <?php pll_e('Descript 2'); ?>

    </div>
    <div class="mats__right-bottom dis">
        <?php pll_e('Descript 3'); ?>

    </div>
</section>
<?php get_footer() ?>