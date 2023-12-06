<?php 
/**
 * Template Name: Featured books
 */
?>

<?php get_header(); ?>


<section class="s-content <?php post_class();?>">
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"> </div>

            <?php 
            $philosopy_agr =array(
                "post_type" => "book",
                "meta_key"=> "is_featured",
                "meta_value"=> true,
            );

            $philosopy_books = new WP_Query( $philosopy_agr );
            ?>

            <?php 
            while($philosopy_books->have_posts()){
                $philosopy_books->the_post();
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