<a class="header__toggle-menu" href="#0" title="Menu"><span><?php _e("Menu","pilosopy")?></span></a>
<nav class="header__nav-wrap">
<h2 class="header__nav-heading h6"><?php _e( "Site Navigation", "pilosopy" )?></h2>


<?php 
$pelosopy_nev_menu =wp_nav_menu(array(
    'theme_location'       => 'top_menu',
    'menu_id'              => 'top_menu',
    'menu_class'           => 'header__nav',
    'echo'                 =>false
));

$pelosopy_nev_menu = str_replace('menu-item-has-children','menu-item-has-children has-children', $pelosopy_nev_menu);
echo wp_kses_post($pelosopy_nev_menu);
?>

<a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php _e("Close","pilosopy") ?></a>
</nav> 