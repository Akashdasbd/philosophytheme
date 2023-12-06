<?php get_header(); ?>


<section class="s-content <?php post_class();?>">

    <div class="row masonry-wrap">
    <h2 class=" text-center"><?php _e( "Our all books", 'philosopy')?></h2>
        <div class="masonry">
            <div class="grid-sizer"> </div>

            <?php 
            while(have_posts()){
                the_post();
                get_template_part("template_part/posts-formats/post",get_post_format());
            }
            ?>

       
        </div>
    </div>
   
     
    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <?php pilosopy_pagenatios();?>
            </nav>
        </div>
    </div>
</section>

<?php get_footer(); ?>