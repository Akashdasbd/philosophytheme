<?php
the_post();
get_header();

?>




    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <article class="row format-standard">
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    <?php the_title();?>
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?php the_date();?></li>
                    <li class="cat">
                        <?php the_category( ' ') ?>
                    </li>
                </ul>
            </div>
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <?php the_post_thumbnail('l') ?>
                </div>
            </div>
            <div class="col-full s-content__main">
                <?php 
                the_content(''); 
                wp_link_pages(); 
                ?>
                <p class="s-content__tags">
                    <span>Post Tags</span>
                    <span class="s-content__tag-list">
                        <?php echo get_the_tag_list(); ?>
                    </span>
                </p>
                <div class="s-content__author">
                    <?php
                    echo get_avatar( get_the_author_meta('ID') );
                    ?>
                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>"><?php the_author();?></a>
                        </h4>
                        <?php the_author_meta('description')?>
                        <ul class="s-content__author-social">
                            <?php 
                            $philosopy_facebook = get_field('facebook','user_'.get_the_author_meta('ID'));
                            $philosopy_twitter = get_field('twitter','user_'.get_the_author_meta('ID'));
                            $philosopy_instagram = get_field('instagram','user_'.get_the_author_meta('ID'));
                            ?>
                            <?php if ($philosopy_facebook) : ?>
                            <li><a href="<?php echo esc_url($philosopy_facebook);?>">Facebook</a></li>
                            <?php endif; ?> 

                            <?php if ($philosopy_twitter) : ?>
                            <li><a href="<?php echo esc_url($philosopy_twitter);?>">Twitter</a></li>
                            <?php endif; ?>

                            <?php if ($philosopy_instagram) : ?>
                            <li><a href="<?php echo esc_url($philosopy_instagram);?>">Instagram</a></li>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
                <div class="s-content__pagenav">
                    <div class="s-content__nav">

                        <div class="s-content__prev">
                            <?php 
                            $philosopy_prev_post = get_previous_post();
                            if ($philosopy_prev_post) :
                            ?>
                            <a href="<?php echo get_the_permalink($philosopy_prev_post) ?>" rel="prev">
                                <span><?php  _e("Previous Post",'philosopy')?></span>
                                <?php echo get_the_title($philosopy_prev_post)?>
                            </a>
                            <?php endif; ?>
                        </div>

                        <div class="s-content__next">
                            <?php 
                            $philosopy_next_post = get_next_post();
                            if ($philosopy_next_post) :
                            ?>
                            <a href="<?php echo get_the_permalink($philosopy_next_post) ?>" rel="next">
                                <span><?php  _e("Next Post",'philosopy')?></span>
                                <?php echo get_the_title($philosopy_next_post) ?>
                            </a>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </article>

        <?php
        if (comments_open() ) {
            comments_template();
        }
        ?>


    </section>

    

<?php
get_footer();
?>