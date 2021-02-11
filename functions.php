<?php

function theme_enqueue_style(){
    wp_enqueue_style('customcss', get_template_directory_uri() . '/assets/css/mycustom.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri(). '/assets/js/mycustom.js', array(), '1.0.0', true);
}
if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = 'https://kit.fontawesome.com/cb1fcebade.js') {
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
          }
        );
      }
    }
  }
add_action('wp_enqueue_scripts', 'theme_enqueue_style');
function rs_theme_setup() {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 370, 255, true);
    add_image_size('banner-image', 1600, 300, true );
    add_theme_support('automatic-feed_links');
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'Header Navigation'),
        'secondary' => __('Footer Menu', 'Footer Navigation')
    )
    );
}
add_action('init', 'rs_theme_setup');
/*HTML 5 */
add_theme_support('html5',array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
));








/*CUSTOM POST TYPE FOR PRODUCTS*/
function flood_barrier_product() {
$labels = array(
        'name' => 'Flood Barriers',
        'singular_name' => 'Flood Barriers',
        'add_new' => 'Add New Flood Barrier',
        'all_items' => 'All items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Flood Barrier',
        'featured_image' => 'Barrier Cover Image',
        'remove_featured_image' => 'Remove Image',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'Not found in Trash!',
        'parent_item_colon' => 'Parent Item'
);
$args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'barriers'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_icon' => 'dashicons-block-default',
        'show_in_rest' => true,
        'supports' => array (
            'title',
            'editor',
            'author',
            'excerpt',
            'comments',
            'thumbnail',
            'revisions ',
            'custom-fields'
        ),
        'taxonomies' => array ('category', 'post_tag'),
        'menu_position' => 5
);
register_post_type('barriers',$args);
}
add_action('init', 'flood_barrier_product');



/*SIDE FUNCTION*/ 
function my_widget_setup() {
    
    register_sidebar(
        array(
              'name' => 'Sidebar',
              'id' => 'sidebar-1',
              'class' => 'custom',
              'description' => 'Standard Sidebar',
              'before_widget' => '<div class="widget %2$s">',
              'after_widget' => '</div>',
              'before_title' => '<h2 class="widget-title">',
              'after_title' => '</h2>', 
    )
);
}
add_action('widgets_init','my_widget_setup');

class Walker_Mymenu_Primary extends Walker_Nav_Menu {
   
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );
 
   
    public $db_fields = array(
        'parent' => 'menu_item_parent',
        'id'     => 'db_id',
    );
 

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );
 
        
        $classes = array( 'sub-menu' );
 
        
        $class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
 
        $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }
 
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent  = str_repeat( $t, $depth );
        $output .= "$indent</ul>{$n}";
    }
 
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ( $depth ) ? str_repeat( $t, $depth ) : '';
 
        $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
 
        
        $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
 
       
        $class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
 
       
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
 
        $output .= $indent . '<li' . $id . $class_names . '>';
 
        $atts           = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        if ( '_blank' === $item->target && empty( $item->xfn ) ) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $item->xfn;
        }
        $atts['href']         = ! empty( $item->url ) ? $item->url : '';
        $atts['aria-current'] = $item->current ? 'page' : '';
 
       
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
 
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
                $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
 
     
        $title = apply_filters( 'the_title', $item->title, $item->ID );
 
      
        $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
 
        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
 
       
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
       $output .= "</li>{$n}";
    }
}
