<?php

/** 
 * Template Name: Tax query emxampol
 */

?>

<?php
$philosopy_query_age = array(
    "post_type"=> "book",
    "posts_per_page"=> -1,
    "tax_query"=>array(
        "relation"   =>"AND",
    
    
    array(
        "relatino"  =>"AND",
        array(
            "taxonomy"=> "language",
            "field"=> "slug",
            "terms"=> array('bangla'),
        ),
        array(
            "taxonomy"  =>"language",
            'field'     =>'slug',
            "terms"     =>"english",
            "operator"  =>"NOT IN"

        )
    ),
    array(
        "taxonomy"   =>"gener",
        "field"      =>"slug",
        "terms"      =>"romantic"
    )
),
);


$philosopy_query_date = new WP_Query( $philosopy_query_age );

while($philosopy_query_date->have_posts()){
    $philosopy_query_date ->the_post();
    the_title();
   echo "<br/>";
}


wp_reset_query();


?>