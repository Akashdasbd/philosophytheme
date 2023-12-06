<?php get_header(); ?>


<section class="s-content <?php post_class(); ?>">


    <div class="col-full s-content__header" data-aos="fade-up">

        <?php echo apply_filters('apply_philosopy','This is apply filters');?>

        <?php do_action( 'after_single_title')?>
        
        <h1><?php single_cat_title();?></h1>
        <p class="lead">
            <?php echo category_description() ?>
        </p>
    </div>
    </div>
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"> </div>

            <?php 
            if (!have_posts()) :
            
            ?>
            <h5 class=" text-center"><?php _e( "no post this category", "philosopy") ?></h5>
            <?php endif;?>
            <?php
            while (have_posts()) {
                the_post();
                get_template_part("template_part/posts-formats/post", get_post_format());
            }
            ?>


        </div>
    </div>


    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <?php pilosopy_pagenatios(); ?>
            </nav>
        </div>
    </div>
</section>

<?php get_footer(); ?>