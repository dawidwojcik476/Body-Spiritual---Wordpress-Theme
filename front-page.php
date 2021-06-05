<?php get_header(); ?>


<section class="gallery">
    <ul class="gallery__list">
        <li>
            <div class="background"></div>
            <img src="<?php bloginfo('template_directory'); ?>/images/maty.webp" alt="Maty do jogi">
            <h2><?php pll_e('Galeria Maty'); ?></h2>
            <a href="http://bodyspirituality.pl/strona-glowna/mats/"></a>
        </li>
        <li type="button">
            <div class="background"></div>
            <img src="<?php bloginfo('template_directory'); ?>/images/body.png" alt="Galeria Body Spiritual">
            <h2><?php pll_e('Galeria Body Spiritual'); ?></h2>
            <a href="http://bodyspirituality.pl/body-gallery/"></a>


        </li>
        <li href="#" type="button">
            <div class="background"></div>
            <img src="<?php bloginfo('template_directory'); ?>/images/people.png" alt="Ludzie joga">
            <h2><?php pll_e('Galeria Ludzie'); ?></h2>
            <a href="http://bodyspirituality.pl/people-gallery/"></a>

        </li>
    </ul>
</section>

<?php get_footer(); ?>