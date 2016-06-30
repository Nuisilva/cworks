<?php
class Custom_Posts {

    function __construct($init) {

        $this->settings = $init;

        add_action( 'init', array(&$this, 'create_custom_post_type') );

    }

    function create_custom_post_type() {

        $labels = array(
            'name'                      => _x( $this->settings['singular_name'], 'Post Type General Name', '_scorch' ),
            'singular_name'             => _x( $this->settings['singular_name'], 'Post Type Singular Name', '_scorch' ),
            'menu_name'                 => __( $this->settings['plural_name'], '_scorch' ),
            'name_admin_bar'            => __( $this->settings['singular_name'], '_scorch' ),
            'archives'                  => __( $this->settings['singular_name'].' Archives', '_scorch' ),
            'parent_item_colon'         => __( 'Parent '.$this->settings['singular_name'].':', '_scorch' ),
            'all_items'                 => __( 'All '.$this->settings['plural_name'], '_scorch' ),
            'add_new_item'              => __( 'Add New '.$this->settings['singular_name'], '_scorch' ),
            'add_new'                   => __( 'Add New '.$this->settings['singular_name'], '_scorch' ),
            'new_item'                  => __( 'New '.$this->settings['singular_name'], '_scorch' ),
            'edit_item'                 => __( 'Edit '.$this->settings['singular_name'], '_scorch' ),
            'update_item'               => __( 'Update '.$this->settings['singular_name'], '_scorch' ),
            'view_item'                 => __( 'View '.$this->settings['singular_name'], '_scorch' ),
            'search_items'              => __( 'Search '.$this->settings['singular_name'], '_scorch' ),
            'not_found'                 => __( 'Not found', '_scorch' ),
            'not_found_in_trash'        => __( 'Not found in Trash', '_scorch' ),
            'featured_image'            => __( $this->settings['featured_image'], '_scorch' ),
            'set_featured_image'        => __( $this->settings['set_featured_image'], '_scorch' ),
            'remove_featured_image'     => __( 'Remove featured image', '_scorch' ),
            'use_featured_image'        => __( 'Use as featured image', '_scorch' ),
            'insert_into_item'          => __( 'Insert into '.$this->settings['singular_name'], '_scorch' ),
            'uploaded_to_this_item'     => __( 'Uploaded to this '.$this->settings['singular_name'], '_scorch' ),
            'items_list'                => __( $this->settings['plural_name'].' list', '_scorch' ),
            'items_list_navigation'     => __( $this->settings['plural_name'].' list navigation', '_scorch' ),
            'filter_items_list'         => __( 'Filter '.$this->settings['plural_name'].' list', '_scorch' ),
        );
        $args = array(
            'label'                     => __( $this->settings['singular_name'], '_scorch' ),
            'description'               => __( 'Create a '.$this->settings['singular_name'].' Listing', '_scorch' ),
            'labels'                    => $labels,
            'supports'                  => $this->settings['supports'],
            'taxonomies'                => $this->settings['taxonomies'],
            'hierarchical'              => $this->settings['hierarchical'],
            'public'                    => $this->settings['is_public'],
            'show_ui'                   => true,
            'show_in_menu'              => true,
            'menu_position'             => $this->settings['menu_position'],
            'menu_icon'                 => $this->settings['dashboard_icon'],
            'show_in_admin_bar'         => true,
            'show_in_nav_menus'         => true,
            'can_export'                => true,
            'has_archive'               => $this->settings['has_archive'],
            'exclude_from_search'       => false,
            'publicly_queryable'        => true,
            'capability_type'           => $this->settings['capability_type'],
            'show_in_rest'              => $this->settings['show_in_rest'],
            'rest_base'                 => $this->settings['singular_name'],
            'rest_controller_class'     => 'WP_REST_Posts_Controller',
        );
        register_post_type( $this->settings['slug'], $args );
        if($this->settings['custom_taxonomy']){
            $length = count($this->settings['custom_taxonomies']);
            for ($i = 0; $i < $length; $i++){
                $labels = array(
                    'name'                       => _x( $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['slug'], 'Taxonomy General Name', 'text_domain' ),
                    'singular_name'              => _x( $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['name'], 'Taxonomy Singular Name', 'text_domain' ),
                    'menu_name'                  => __( $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['name'], 'text_domain' ),
                    'all_items'                  => __( 'All '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'parent_item'                => __( 'Parent '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'parent_item_colon'          => __( 'Parent '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'].':', 'text_domain' ),
                    'new_item_name'              => __( 'New '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'add_new_item'               => __( 'Add New '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'edit_item'                  => __( 'Edit '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'update_item'                => __( 'Update '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'view_item'                  => __( 'View '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'separate_items_with_commas' => __( 'Separate '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['plural_name'].' with commas', 'text_domain' ),
                    'add_or_remove_items'        => __( 'Add or remove'.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['singular_name'], 'text_domain' ),
                    'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
                    'popular_items'              => __( 'Popular '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['plural_name'], 'text_domain' ),
                    'search_items'               => __( 'Search '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['plural_name'], 'text_domain' ),
                    'not_found'                  => __( 'Not Found', 'text_domain' ),
                    'no_terms'                   => __( 'No '.$this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['plural_name'], 'text_domain' ),
                    'items_list'                 => __( $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['plural_name'].' list', 'text_domain' ),
                    'items_list_navigation'      => __( $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['plural_name'].' list navigation', 'text_domain' ),
                );
                $args = array(
                    'labels'                     => $labels,
                    'hierarchical'               => $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['hierarchical'],
                    'public'                     => true,
                    'show_ui'                    => true,
                    'show_admin_column'          => true,
                    'show_in_nav_menus'          => true,
                    'show_tagcloud'              => $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['tag_cloud'],
                );
                register_taxonomy( $this->settings['custom_taxonomies'][$i]['taxonomy_'.$i]['slug'], array( $this->settings['slug'] ), $args );
            }
        }

    }
}


if(class_exists('acf')) :
    if( have_rows('create_custom_field', 'option') ):
        while( have_rows('create_custom_field','option') ): the_row();
            //Set Variable for options
            $name                   = get_sub_field('name');
            $post_type_key          = get_sub_field('post_type_key');
            $post_type              = get_sub_field('post_type');
            $singular_name          = get_sub_field('singular_name');
            $plural_name            = get_sub_field('plural_name');
            $is_public              = get_sub_field('plural_name');
            $featured_image_name    = get_sub_field('featured_image_name');
            $has_archives           = get_sub_field('has_archives');
            $supports               = get_sub_field('supports');
            $show_in_admin_bar      = get_sub_field('show_in_admin_bar');
            $dashboard_icon         = get_sub_field('dashboard_icon');
            $menu_position          = get_sub_field('menu_position');
            $hierarchical           = get_sub_field('hierarchical');
            $show_in_rest           = get_sub_field('show_in_rest');
            $taxonomies             = get_sub_field('taxonomies');
            $taxonomy_type          = get_sub_field('taxonomy_type');
            $custom_taxonomy        = get_sub_field('custom_taxonomy');

            //Check if has archives is TRUE/FALSE
            if($has_archives){
                $archive = $post_type_key;
            }else{
                $archive = false;
            }

            if($taxonomy_type == 'default'){
                $customtaxonomy = false;
                $taxonomy_types = array('category', 'post_tag');
            }else{
                $customtaxonomy = true;
                $taxonomy_types = array();
                $taxonomy_list = array();

                // for each Row of Taxonomy objects
                  // get sub field 1
                  // get sub field 2
                  // ...
                  // push each field key/value pair to an array
                  // push that array into the taxonomy_list array with a key of 'taxonomy_'.[currentid]
                // loop
                $x = 0;
                if( have_rows('custom_taxonomy') ):
                    while( have_rows('custom_taxonomy') ): the_row();
                        $taxonomy_key = get_sub_field('taxonomy_key');
                        $name_singular = get_sub_field('name_singular');
                        $name_plural = get_sub_field('name_plural');
                        $hierarchical = get_sub_field('hierarchical');
                        $tag_cloud = get_sub_field('tag_cloud');

                        //Set Temporary Array
                        $temp_tax_array = array('taxonomy_'.$x => array(
                                "slug" => $taxonomy_key,
                                "name" => $name_plural,
                                "singular_name" => $name_singular,
                                "plural_name" => $name_plural,
                                "hierarchical" => $hierarchical,
                                "tag_cloud" => $tag_cloud,
                            ),
                        );
                        //array_push($taxonomy_types, $taxonomy_key );
                        array_push($taxonomy_list, $temp_tax_array);
                        $x++;
                    endwhile;
                    //print_r($taxonomy_list);
                endif;
            }

            $custom_posts_settings = array(
                "slug" => $post_type_key,
                "name" => $name,
                "singular_name" => $singular_name,
                "plural_name" => $plural_name,
                "featured_image" => $featured_image_name,
                "set_featured_image" => "Set ".$featured_image_name,
                "is_public" => $is_public,
                "has_archive" => $archive,       //Set to false or use slug name for archive name
                "supports" => $supports,
                "dashboard_icon" => $dashboard_icon,
                "menu_position" => $menu_position,
                "show_in_admin_bar" => $show_in_admin_bar,
                "hierarchical" => $hierarchical,
                "capability_type" => $post_type,
                "show_in_rest" => $show_in_rest,
                "taxonomies" => $taxonomy_types,
                "custom_taxonomy" => $custom_taxonomy,
                "custom_taxonomies" => $taxonomy_list,
            );
        //Create that custom post type
        $var = new Custom_Posts ($custom_posts_settings);
        endwhile;
    endif;
endif;