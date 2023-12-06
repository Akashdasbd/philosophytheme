<?php 




if( class_exists( 'CSF' ) ) {

  // $page_id =0;

  // if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
  //    $page_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post']:$_REQUEST['post_ID'];
  // };

  // $current_page_id =get_post_meta($page_id,'_wp_page_template',true);

  // if ('about.php' != $current_page_id) {
  //   return  $prefix ;
  // }

    //
    // Set a unique slug-like ID
    $prefix = 'my_post_options';
  
    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
      'title'     => 'My page Options',
      'post_type' => 'page',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 1',
      'fields' => array(
  
        //
        // A text field
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Simple Text',
          'default' =>__( 'Page headin', 'philosopy')
        ),  
        // A text field
        array(
          'id'    => 'is_favorite',
          'type'  => 'switcher',
          'title' => __( 'Is favorite', 'philosopy'),
          'default' =>1
        ),
         array(
          'id'    => 'is_favorite_extra',
          'type'  => 'switcher',
          'title' => __( 'Extra chack', 'philosopy'),
          'default' =>1
        ),

        array(
          'id'    => 'favorite_text',
          'type'  => 'text',
          'title' => 'Favorite texs',
          'dependency' => array( 'is_favorite|is_favorite_extra', '==|==', '1|1' ),
          
        ), 

        array(
          'id'         => 'extra-language',
          'type'       => 'checkbox',
          'title'      => __( 'Extra language', 'philosopy'),
          'options'    => array(
            'bangla' => 'Bangla',
            'english' => 'English',
            'french' => 'French',
          ),
        ),

        array(
          'id'    => 'language data',
          'type'  => 'text',
          'title' => 'Language data',
          'dependency' => array( 'extra-language', 'any', 'bangla,english' ),

        )
      )
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 2',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
          'default' =>__( 'Page textarea', 'philosopy')
        ),
        array(
          'id'    => 'opt-upload-1',
          'type'  => 'upload',
          'title' => 'Upload',
        ),

        array(
          'id'          => 'opt-gallery-2',
          'type'        => 'gallery',
          'title'       => 'Gallery',
          'add_title'   => 'Add Images',
          'edit_title'  => 'Edit Images',
          'clear_title' => 'Remove Images',
        ),

        array(
          'id'     => 'opt-fieldset-1',
          'type'   => 'fieldset',
          'title'  => 'Fieldset',
          'fields' => array(
            array(
              'id'    => 'opt-text',
              'type'  => 'text',
              'title' => 'Text',
            ),
            array(
              'id'    => 'opt-color',
              'type'  => 'color',
              'title' => 'Color',
            ),
            array(
              'id'    => 'opt-switcher',
              'type'  => 'switcher',
              'title' => 'Switcher',
            ),
          ),
        ),

        array(
          'id'        => 'opt-group-1',
          'type'      => 'group',
          'title'     => 'Group',
          'fields'    => array(
            
            array(
              'id'          => 'opt-select-1',
              'type'        => 'select',
              'title'       => 'Select',
              'placeholder' => 'Select an option',
              'options'     => 'posts',
              'query_args'  => array(
                'posts_per_page' => -1 ,// for get all pages (also it's same for posts).
                'post_type' => 'book',
              )
            ),
          ),
        ),
        
      ),
    ), );
  
  };
  



  // Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_shortcodes';

  //
  // Create a shortcoder
  CSF::createShortcoder( $prefix, array(
    'button_title' => 'Add Shortcode',
  ) );

  //
  // A basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Basic 1',
    'view'      => 'normal', // View model of the shortcode. `normal` `contents` `group` `repeater`
    'shortcode' => 'gmap', // Set a unique slug-like name of shortcode.
    'fields'    => array(

      array(
        'id'    => 'place',
        'type'  => 'text',
        'title' => 'place',
        'help'  =>'enter you place',
        'default'=>'Dhaka'
      ),

      array(
        'id'    => 'width',
        'type'  => 'text',
        'title' => 'Width',
        'default' =>'100%',
      ),

      array(
        'id'    => 'height',
        'type'  => 'text',
        'title' => 'height',
        'default' =>'500',
      ),


      array(
        'id'    => 'zoom',
        'type'  => 'text',
        'title' => 'zoom',
        'default' =>'14',
      ),

    )

  ) );

  //
  // Another basic shortcode
  CSF::createSection( $prefix, array(
    'title'     => 'Shortcode Basic 2',
    'view'      => 'normal', // View model of the shortcode. `normal` `contents` `group` `repeater`
    'shortcode' => 'my_shortcode', // Set a unique slug-like name of shortcode.
    'fields'    => array(

      array(
        'id'    => 'title',
        'type'  => 'text',
        'title' => 'Titlte',
      ),

      array(
        'id'    => 'switcher',
        'type'  => 'switcher',
        'title' => 'Switcher',
      ),

      array(
        'id'    => 'content',
        'type'  => 'textarea',
        'title' => 'Content',
      ),

    )

  ) );


}


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_taxonomy_options';

  //
  // Create taxonomy options
  CSF::createTaxonomyOptions( $prefix, array(
    'taxonomy'  => 'language',
    'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'fields' => array(

      array(
        'id'    => 'opt-text',
        'type'  => 'media',
        'title' => 'Text',
      ),

      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Textarea',
      ),

    )
  ) );

}


// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'My Framework',
    'menu_slug'  => 'my-framework',
    'menu_icon'  => 'dashicons-cover-image',
    'menu_position' =>40,
    
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Footer ariay',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-switcher-1',
        'type'  => 'switcher',
        'title' => 'Disply tag',
      ),

      array(
        'id'      => 'socil_facebook',
        'type'    => 'text',
        'title'   => 'Facebook link',
      ),

      array(
        'id'      => 'socil_x',
        'type'    => 'text',
        'title'   => 'X link',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );

}



