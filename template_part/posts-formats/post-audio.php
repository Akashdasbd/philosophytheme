<?php
$philosopy_audio ='';
if (function_exists('the_field')) {
    $philosopy_audio = get_field('source_file');
}
?>


<article class="masonry__brick entry format-audio" data-aos="fade-up">
    <div class="entry__thumb">
    <a href="<?php the_permalink();?>" class="entry__thumb-link">
            <?php the_post_thumbnail("philosopy_home_sq");?>
        </a>
        <?php if ($philosopy_audio) : ?>
        <div class="audio-wrap">
            <audio id="player" src="<?php echo esc_url($philosopy_audio);?>" width="100%" height="42" controls="controls"></audio>
        </div>
        <?php endif; ?>
    </div>

</article>