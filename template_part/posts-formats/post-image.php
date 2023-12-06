<article class="masonry__brick entry format-standard" data-aos="fade-up">
    <div class="entry__thumb">
    <a href="<?php the_permalink();?>" class="entry__thumb-link">
            <?php the_post_thumbnail("philosopy_home_sq");?>
        </a>
    </div>
    <?php get_template_part("template_part/common/post/summary") ?>
</article>