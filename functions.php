<?php 

require_once(get_theme_file_path("/inc/tgm.php"));
require_once(get_theme_file_path("/inc/acf.php"));
require_once(get_theme_file_path("/inc/cmb2-attached.php"));
require_once(get_theme_file_path("/widget/socile-widget.php"));
require_once(get_theme_file_path("/lib/csf/codestar-framework.php"));
require_once(get_theme_file_path("/inc/cf.php"));

if ( ! isset( $content_width ) ) $content_width = 960;

function pilosopy_setup(){
    load_theme_textdomain("pilosopy");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
	add_theme_support('automatic-feed-links');
    add_theme_support("html5",array("search-form","comment-list"));
    add_theme_support("post-formats",array("image","video","gallery","quote","audio","link"));
    add_editor_style("/assets/css/editor_style.css");

    register_nav_menu( "top_menu", __("Top menu","pilosopy"));
    register_nav_menus(array(
        'footer_left_menu'  => __('Footer left menu','philosopy'),
        'footer_middle_menu' => __('Footer Middle menu','philosopy'),
        'footer_right_menu' => __('Footer Reght menu','philosopy'),
    ));
    add_image_size("philosopy_home_sq",400,400,true);

}
add_action("after_setup_theme","pilosopy_setup");


function pilosopy_assets(){
    wp_enqueue_style("font-awesome",get_theme_file_uri("/assets/css/font-awesome/css/font-awesome.min.css"),null,"4.2.0");
    wp_enqueue_style("font",get_theme_file_uri("/assets/css/fonts.css"),null,"1.0");
    wp_enqueue_style("base_css",get_theme_file_uri("/assets/css/base.css"),null,"1.0");
    wp_enqueue_style("vendor_css",get_theme_file_uri("/assets/css/vendor.css"),null,"1.0");
    wp_enqueue_style("main_css",get_theme_file_uri("/assets/css/main.css"),null,"1.0");
    wp_enqueue_style("pilosopy_css",get_stylesheet_uri());


    wp_enqueue_script("modernizr_js",get_theme_file_uri("/assets/js/modernizr.js"),null,"1.0");
    wp_enqueue_script("pace_js",get_theme_file_uri("/assets/js/pace.min.js"),null,"1.0");
    wp_enqueue_script("plugins_js",get_theme_file_uri("/assets/js/plugins.js"),array("jquery"),"1.0",true);

	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
    wp_enqueue_script("main_js",get_theme_file_uri("/assets/js/main.js"),array("jquery"),"1.0",true);


}
add_action("wp_enqueue_scripts","pilosopy_assets");



function pilosopy_pagenatios(){
    global $wp_query;

    $links = paginate_links(array(
        'current'    =>max(1, get_query_var("paged")),
        'total'      => $wp_query->max_num_pages,
        'type'       =>'list',
        'mid_size'  => apply_filters('apply_philosopy_pagination_med',1)
    ) );

    $links = str_replace('page-numbers','pgn__num', $links);
    $links = str_replace('next pgn__num','pgn__next', $links);
    $links = str_replace('prev pgn__num','pgn__prev', $links);
    $links = str_replace("<ul class='pgn__num'>","<ul>", $links);

    echo wp_kses_post($links);
}


remove_action("term_description","wpautop");

function philosopy_widgets_int() {
	register_sidebar( array(
		'name'          => __( 'About', 'philosopy' ),
		'id'            => 'about',
		'description'   => __( 'Widgets in this area will be shown on about pages.', 'pilosopy' ),
		'before_widget' => '<div id="%1$s" class="col-block %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="quarter-top-margin">',
		'after_title'   => '</h3>',
	) );	

    register_sidebar( array(
		'name'          => __( 'Where to Find Us', 'philosopy' ),
		'id'            => 'where_to_find_us',
		'description'   => __( 'Widgets in this area will be shown on Where to Find Us contact page.', 'pilosopy' ),
		'before_widget' => '<div id="%1$s" class="col-six tab-full %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );   
     
    register_sidebar( array(
		'name'          => __( 'Contact Info', 'philosopy' ),
		'id'            => 'contact_info',
		'description'   => __( 'Widgets in this area will be shown on Contact Info contact page.', 'pilosopy' ),
		'before_widget' => '<div id="%1$s" class="col-six tab-full %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );    
    
    register_sidebar( array(
		'name'          => __( 'Befor Footer about', 'philosopy' ),
		'id'            => 'befor_footer_about',
		'description'   => __( 'Widgets in this area will be shown on Contact Info Befor Footer about.', 'pilosopy' ),
		'before_widget' => '<div id="%1$s"  class=" %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );    
    
    register_sidebar( array(
		'name'          => __( 'Footer text', 'philosopy' ),
		'id'            => 'footer_text',
		'description'   => __( 'Widgets in this area will be shown on Contact Info Footer text.', 'pilosopy' ),
		'before_widget' => '<div id="%1$s"  class=" %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );    
    
    register_sidebar( array(
		'name'          => __( 'Footer buton text', 'philosopy' ),
		'id'            => 'footer_buton_text',
		'description'   => __( 'Widgets in this area will be shown on Contact Info Footer text.', 'pilosopy' ),
		'before_widget' => '<div id="%1$s"  class=" %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Header social links add', 'philosopy' ),
		'id'            => 'header_social_links',
		'description'   => __( 'Widgets in this area will be shown on Contact Info Footer text.', 'pilosopy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Footer social links add', 'philosopy' ),
		'id'            => 'footer_social_links',
		'description'   => __( 'Widgets in this area will be shown on Contact Info Footer text.', 'pilosopy' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}

add_action("widgets_init","philosopy_widgets_int");

function philosopy_search_form( $form ) {
    $homedl = home_url("/");
    $search_for = __( 'Search for', 'philosopy' );
    $boton_label = __( 'Search', 'philosopy' );
	$post_type =<<<pt
	<input type="hidden" name="post_type" value="post">
	pt;

	if(is_post_type_archive('book')){
		$post_type =<<<pt
		<input type="hidden" name="post_type" value="book">
		pt;
	};

    $newform = <<<FORM
    <form role="search" method="get" class="header__search-form" action="{$homedl}">
        <label>
            <span class="hide-content">{$search_for}:</span>
            <input type="search" class="search-field" placeholder="Type Keywords" name="s" title="{$search_for}" autocomplete="off">
        </label>
		{$post_type}
        <input type="submit" class="search-submit" value="{$boton_label}">
    </form>
FORM;

    return $newform;
};



add_filter('get_search_form','philosopy_search_form');

function after_single_t(){
	echo '<h3>Hi this is title</h3>';
}
add_action('after_single_title','after_single_t');

function my_filter($text){
	return strtoupper($text);
}
add_filter('apply_philosopy','my_filter');

function pagination_med($med){
	return 2;
}
add_filter('apply_philosopy_pagination_med','pagination_med');

function philosopy_cpt_sulg_fix($post_link , $id){
	$p = get_post($id);
	if(is_object($p) && 'chapters'==get_post_type($id)){
		$parent_post_id =get_field('parent_post');
		$parent_post = get_post($parent_post_id);
		if($parent_post){
			$post_link = str_replace('%book%',$parent_post->post_name,$post_link);
		};
		
	};
	return $post_link;
};
add_filter("post_type_link","philosopy_cpt_sulg_fix",1,2);


function philosopy_tag_titel_lag($titel){
	if(is_post_type_archive("book")   || is_tax('language')){

		$titel = __( "Languages", "philosopy" );

	};

	return $titel;

}
add_filter("philosopy_tag_titel","philosopy_tag_titel_lag");

function philosopy_tams_lags( $tags ){
	if(is_post_type_archive("book") || is_tax('language')){
		$tags = get_terms(array(
			"taxonomy"=> "language",
		)) ;
	}
	return $tags;
}
add_filter("philosopy_tams_lag","philosopy_tams_lags");





