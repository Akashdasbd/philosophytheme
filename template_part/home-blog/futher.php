<?php
$pilosopy_fu = new WP_Query(
    array(
        "meta_key" => "post_fut",
        "meta_value" => "1",
        "posts_per_page" => 3
    )
);

$post_data = array();
while ($pilosopy_fu->have_posts()) {
    $pilosopy_fu->the_post();
    $categorys = get_the_category();
    $category =  $categorys[mt_rand(0, count($categorys) - 1)];
    $post_data[] = array(
        "titel"  => get_the_title(),
        "date" => get_the_date(),
        "permalink" => get_permalink(),
        "thumbnail"  => get_the_post_thumbnail_url(get_the_ID(), "large"),
        "author"   => get_the_author_meta("display_name"),
        "author_link" => get_author_posts_url(get_the_author_meta("ID"),),
        "avatar"  => get_avatar_url(get_the_author_meta("ID")),
        "cat"    =>$category->name,
        "cat_link" => get_category_link($category),
        
    );
};

wp_reset_query();
if ($pilosopy_fu->post_count > 1) :
?>
    <div class="pageheader-content row">
        <div class="col-full">
            <div class="featured">
                <div class="featured__column featured__column--big">
                    <div class="entry" style="background-image:url('<?php echo esc_url($post_data[0]["thumbnail"]); ?>;">
                        <div class="entry__content">
                            <span class="entry__category"><a href="<?php echo esc_url($post_data[0]["cat_link"]); ?>"><?php echo esc_html($post_data[0]["cat"]); ?></a></span>
                            <h1><a href="<?php echo esc_url($post_data[0]["permalink"]);?>" title><?php echo esc_html($post_data[0]["titel"]); ?></a></h1>
                            <div class="entry__info">
                                <a href="<?php echo esc_url($post_data[0]["author_link"]); ?>" class="entry__profile-pic">
                                    <img class="avatar" src="<?php echo esc_url($post_data[0]["avatar"]); ?>" alt>
                                </a>
                                <ul class="entry__meta">
                                    <li><a class="bypostauthor" href="<?php echo esc_url($post_data[0]["author_link"]); ?>"><?php echo esc_html($post_data[0]["author"]) ?></a></li>
                                    <li><?php echo esc_html($post_data[0]["date"]); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="featured__column featured__column--small">

                    <?php
                    for ($i = 1; $i < 3; $i++) :
                    ?>

                        <div class="entry" style="background-image:url('<?php echo esc_url($post_data[$i]["thumbnail"]); ?>;');">
                            <div class="entry__content">
                                <span class="entry__category"><a href="<?php echo esc_url($post_data[$i]["cat_link"]); ?>"><?php echo esc_html($post_data[$i]["cat"]); ?></a></span>
                                <h1><a href="<?php echo esc_url($post_data[$i]["permalink"]);?>" title><?php echo esc_html($post_data[$i]["titel"]); ?></a></h1>
                                <div class="entry__info">
                                    <a href="<?php echo esc_url($post_data[$i]["author_link"]); ?>" class="entry__profile-pic">
                                        <img class="avatar" src="<?php echo esc_url($post_data[$i]["avatar"]); ?>" alt>
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a class="bypostauthor" href="<?php echo esc_url($post_data[$i]["author_link"]); ?>"><?php echo esc_html($post_data[$i]["author"]) ?></a></li>
                                        <li><?php echo esc_html($post_data[$i]["date"]); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
<?php endif; ?>