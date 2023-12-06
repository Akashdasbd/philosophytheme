<section class="s-extra">
  <div class="row top">
    <div class="col-eight md-six tab-full popular">
      <h3><?php _e( "Popular Posts", "philosopy" )?></h3>
      <div class="block-1-2 block-m-full popular__posts">
        <?php 
        $philosopy_popular_post = new WP_Query( array(
          "posts_per_page"      =>6,
          "ignore_sticky_posts" => 1,
          "orderby"             =>"comment_count"
        ) );

        while ($philosopy_popular_post->have_posts()) {
          $philosopy_popular_post->the_post();
        
      
        ?>
        <article class="col-block popular__post">
          <a href="<?php the_permalink();?>" class="popular__thumb">
            <?php the_post_thumbnail();?>
            
          </a>
          <h5><a href="<?php the_permalink() ?>"><?php the_title();?></a></h5>
          <section class="popular__meta">
            <span class="popular__author"><span><?php _e( 'By','philosophy')?></span> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"> <?php the_author();?></a></span>
            <span class="popular__date"><span><?php _e( 'on', 'philosophy' ) ?></span> <time datetime="2017-12-19"><?php echo get_the_date();?></time></span>
          </section>
        </article>

        <?php
         }
        wp_reset_query();
        ?>
        



      </div>
    </div>
    <div class="col-four md-six tab-full about">
      <?php
      if(is_active_sidebar('befor_footer_about')) {
        dynamic_sidebar('befor_footer_about');
      }
      ?>
      <ul class="about__social">
        <?php 
        if (is_active_sidebar('footer_social_links')) {
          dynamic_sidebar('footer_social_links');
        }
        ?>
      </ul>
    </div>
  </div>

<?php 
 $philosopy_desply_tag = get_option( 'disply_tag_on' );

 if ($philosopy_desply_tag) :
  # code...
 
?>
  <div class="row bottom tags-wrap">
    <div class="col-full tags">
      <?php 
      $philosopy_tag_titel= apply_filters('philosopy_tag_titel',__('Tags','philosopy') );
      $philosopy_tams_lag= apply_filters('philosopy_tams_lag', get_tags());

      ?>
      <h3><?php echo esc_html($philosopy_tag_titel) ?></h3>
      <div class="tagcloud">
        <?php 
        if(is_array($philosopy_tams_lag)) {
          foreach($philosopy_tams_lag as $itm) {
            printf('<a href="%s">%s</a>', get_term_link($itm->term_id), $itm->name);
          }
        }
        ?>
      </div>
    </div>

  </div>

  <?php endif; ?>


</section>

<footer class="s-footer">
  <div class="s-footer__main">
    <div class="row">
      <div class="col-two md-four mob-full s-footer__sitelinks">
        <h4><?php _e( 'Quick Links','philosopy' )?></h4>
        <?php 
        wp_nav_menu(array(
          'theme_location'       => 'footer_left_menu',
          'menu_id'              => 'footer_left_menu',
          'menu_class'           => 's-footer__linklist'
      ));
        ?>
      </div>
      <div class="col-two md-four mob-full s-footer__archives">
        <h4><?php _e('Archives','philosopy')?></h4>
        <?php 
        wp_nav_menu(array(
          'theme_location'       => 'footer_middle_menu',
          'menu_id'              => 'footer_middle_menu',
          'menu_class'           => 's-footer__linklist'
      ));
        ?>
      </div>
      <div class="col-two md-four mob-full s-footer__social">
        <h4><?php _e( 'Social', 'philosopy') ?></h4>
        <?php 
        wp_nav_menu(array(
          'theme_location'       => 'footer_right_menu',
          'menu_id'              => 'footer_right_menu',
          'menu_class'           => 's-footer__linklist'
      ));
        ?>
      </div>
      <div class="col-five md-full end s-footer__subscribe">
        <?php 
        if (is_active_sidebar('footer_text')) {
          dynamic_sidebar('footer_text');
        }
        ?>
        
        <div class="subscribe-form">
          <form id="mc-form" class="group" novalidate="true">
            <input type="email" value name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required>
            <input type="submit" name="subscribe" value="Send">
            <label for="mc-email" class="subscribe-message"></label>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="s-footer__bottom">
    <div class="row">
      <div class="col-full">
        <div class="s-footer__copyright">
          <?php 
          if (is_active_sidebar('footer_buton_text')) {
            dynamic_sidebar('footer_buton_text');
          }
          ?>
        </div>
        <div class="go-top">
          <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id="preloader">
  <div id="loader">
    <div class="line-scale">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8189f4b33adebc27","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>

</html>