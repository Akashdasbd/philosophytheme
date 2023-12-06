<?php
$philosopy_video ='';
if (function_exists('the_field')) {
    $philosopy_video = get_field('source_file');
}
?>


<article class="masonry__brick entry format-video" data-aos="fade-up">
    <div class="entry__thumb video-image">
        <a href="<?php echo esc_url($philosopy_video) ?>?color=01aef0&title=0&byline=0&portrait=0" data-lity>
           <?php the_post_thumbnail("philosopy_home_sq"); ?>
        </a>
    </div>
    <?php get_template_part("template_part/common/post/summary") ?>
</article>