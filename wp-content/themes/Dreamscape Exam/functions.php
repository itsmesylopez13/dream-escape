<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Header', 'Dreamscape Exam'),
      'description' => sprintf(__('Options for showcase','Dreamscape Exam')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/logo/crazydemo.png',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'Dreamscape Exam'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));
    $wp_customize->add_setting('showcase_phone', array(
      'default'   => _x('+123 45567', 'Dreamscape Exam'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_phone', array(
      'label'   => __('Phone', 'Dreamscape Exam'),
      'section' => 'showcase',
      'priority'  => 2
    ));
    $wp_customize->add_setting('showcase_email', array(
      'default'   => _x('mail@crazydomains.com', 'Dreamscape Exam'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_email', array(
      'label'   => __('Email', 'Dreamscape Exam'),
      'section' => 'showcase',
      'priority'  => 3
    ));

  

        $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 6
    ));
    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('BOOK NOW', 'wpbootstrap'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'wpbootstrap'),
      'section' => 'showcase',
      'priority'  => 7
    ));
 
  }
  add_action('customize_register', 'wpb_customize_register');



  function wpb_customize_register1($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase1', array(
      'title'   => __('Footer', 'Dreamscape Exam'),
      'description' => sprintf(__('Options for showcase','Dreamscape Exam')),
      'priority'    => 130
    ));
    $wp_customize->add_setting('showcase1_image', array(
      'default'   => get_bloginfo('template_directory').'/img/logo/crazydemo.png',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase1_image', array(
      'label'   => __('Showcase Image', 'Dreamscape Exam'),
      'section' => 'showcase1',
      'settings' => 'showcase1_image',
      'priority'  => 1
    )));
    
    $wp_customize->add_setting('facebook', array(
      'default'   => _x('#', 'Dreamscape Exam'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('facebook', array(
      'label'   => __('Facebook Url', 'Dreamscape Exam'),
      'section' => 'showcase1',
      'priority'  => 4
    ));

   $wp_customize->add_setting('twitter', array(
      'default'   => _x('#', 'Dreamscape Exam'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('twitter', array(
      'label'   => __('Twitter Url', 'Dreamscape Exam'),
      'section' => 'showcase1',
      'priority'  => 5
    ));

       $wp_customize->add_setting('google', array(
      'default'   => _x('#', 'Dreamscape Exam'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('google', array(
      'label'   => __('Google Url', 'Dreamscape Exam'),
      'section' => 'showcase1',
      'priority'  => 5
    ));


       $wp_customize->add_setting('linkedin', array(
      'default'   => _x('#', 'Dreamscape Exam'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('linkedin', array(
      'label'   => __('Linkedin Url', 'Dreamscape Exam'),
      'section' => 'showcase1',
      'priority'  => 5
    ));

      
 
  }
  add_action('customize_register', 'wpb_customize_register1');









function awesome_custom_post_type(){
$labels = array(
  'name' => 'Featured Tours',
  'singular _name' => 'Featured Tours',
    'add_new' => 'Add Featured Tours',
      'all_items' => 'All Items',
       'add_new_item' => 'Add Tours',
           'edit_item' => 'Edit Tours',
                 'new_item' => 'New Tours',
               'view_item' => 'View Tours',
            'search_item' => 'Search Tours',
            'not_found' => 'No items Found',
               'not_found_in_trash' => 'No items found in trash',
            'parent_item_colon' => 'Parent Item'
);
$args = Array(
  'labels' => $labels,
  'public' => true,
  'has_archive' => true,
  'publicly_queryable' => true,
    'query_var' => true,
      'rewrite' => true,
        'capability_type' =>'post',
       'hierarchical'=> false,
       'supprt' => array(
        'title',
        'editor',
        'excerpt',
        'thumbnail',
        'revisions',
       ), 
       'taxonomies'=> array('category', 'post', 'tag'),
       'menu_position' =>  7, 
       'exclude_from_search' => false

);

register_post_type('featured tours',$args);

  }
  add_action('init', 'awesome_custom_post_type');
  ?>
