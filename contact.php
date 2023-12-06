<?php

/** 
 * Template Name: Contact page
 */

?>


<?php
the_post();
get_header();

?>




<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">
        <div class="s-content__header col-full">
            <h1 class="s-content__header-title">
                <?php the_title(); ?>
            </h1>

        </div>

        <div class="s-content__media col-full">
            <div id="map-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116754.20361558431!2d90.17900601560383!3d23.869438711570673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755ebd3d6df9569%3A0x277b3819d4da3e91!2s%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1698468224456!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>

        <div class="col-full s-content__main">
            <?php the_content('') ?>

            <div class="row">
            <?php if (is_active_sidebar('where_to_find_us')) {
                    dynamic_sidebar('where_to_find_us');
                }
                ?> 
            <?php if (is_active_sidebar('contact_info')) {
                    dynamic_sidebar('contact_info');
                }
                ?>

            </div>




            <h3><?php _e("Say Hello","philosopy") ?></h3>

            <div>
                <?php

                if (get_field('contact_form_7_shortcord')) {
                    echo do_shortcode(get_field('contact_form_7_shortcord'));
                }
                ?>
            </div>

        </div>





    </article>






</section>



<?php
get_footer();
