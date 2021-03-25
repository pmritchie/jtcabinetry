<?php



add_filter('intermediate_image_sizes_advanced', 'prefix_remove_default_images');
function prefix_remove_default_images($sizes)
{
    unset($sizes['small'], $sizes['medium'], $sizes['large'], $sizes['medium_large']); // 150px
    // 300px
    // 1024px
    // 768px
    return $sizes;
}

add_filter('post_thumbnail_html', 'remove_wps_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_wps_width_attribute', 10);
remove_filter('the_content', 'wp_make_content_images_responsive');

function remove_wps_width_attribute($html)
{
    return preg_replace('/(width|height)=\"\d*\"\s/', '', $html);
}

// first run setup


        add_action('wp_enqueue_scripts', 'my_jquery_enqueue', 11);


    function my_jquery_enqueue()
    {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null);
        wp_enqueue_script('jquery');
    }

    /**
     * Register Custom Navigation Walker.
     */
    function register_wpt_navwalker()
    {
        require_once get_template_directory().'/includes/class-wp-bootstrap-navwalker.php';
    }
    add_action('after_setup_theme', 'register_wpt_navwalker');

    function wpb_add_google_fonts()
    {
        wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab&family=Caveat&family=Pangolin&family=Fjalla+One:400,700,800&display=swap', false);
    }
    add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');

    //Page Slug Body Class
    function add_slug_body_class($classes)
    {
        global $post;
        if (isset($post)) {
            $classes[] = $post->post_name;
        }

        return $classes;
    }
    add_filter('body_class', 'add_slug_body_class');

    function wpt_setup()
    {
        load_theme_textdomain('template-theme', get_template_directory().'/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');

        add_theme_support('editor-styles');
   

        //register nav menus
        register_nav_menus([
            'menu_primary' => esc_html__('Primary Menu', 'ott'),
            'menu_footer' => esc_html__('Footer Menu', 'ott'),
        ]);

        //custom featured image size
        add_theme_support('post-thumbnails');

        //html5 support & background & logo
        add_theme_support('html5', [
            'comment-list', 'comment-form', 'search-form', 'gallery',
            'caption',
        ]);

        add_theme_support('custom-background', apply_filters('wpt_custwpt_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ]));

        add_theme_support('custom-logo', [
            'height' => 75,
            'width' => 170,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => ['site-title', 'site-description'],
        ]);

        //post formats
        add_theme_support('post-formats', [
            'video',
            'gallery',
            'audio',
        ]);
    }

add_action('after_setup_theme', 'wpt_setup');
// end

// excerpt
function wpt_excerpt_length($length)
{
    return 40;
}
add_filter('excerpt_length', 'wpt_excerpt_length', 999);

function wpt_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'wpt_excerpt_more');
// end

// editor style
function wpt_add_editor_styles()
{
    add_editor_style(get_template_directory_uri().'/assets/editor-style.css');
}
add_action('init', 'wpt_add_editor_styles');
// end

// Video embed responsive
function wpt_oembed_filter($html)
{
    return '<div class="embed-responsive embed-responsive-16by9">'.$html.'</div>';
}
add_filter('embed_oembed_html', 'wpt_oembed_filter', 10, 4);
add_filter('video_embed_html', 'wpt_oembed_filter');
// end


// Mega Menu
add_filter('walker_nav_menu_start_el', 'wpt_desktop_menu', 10, 4);
function wpt_desktop_menu($item_output, $item, $depth, $args)
{
    global $wp_query;
    if ('menu-desktop' !== $args->theme_location) {
        return $item_output;
    }

    if (in_array('om-megamenu', $item->classes)) {
        global $wp_query;
        global $post;
        $subposts = get_posts('numberposts=6&cat='.$item->object_id);
        $item_output .= '<div class="w-mega-menu"><div class="w-wrap">';
        foreach ($subposts as $post) {
            setup_postdata($post);
            $item_output .= '<div class="w-article"><a href="'.get_permalink($post->ID).'">';
            $item_output .= '<div class="lazy bg bg-50" data-src="'.get_the_post_thumbnail_url($post->ID, 'medium').'"></div>';
            $item_output .= '<span class="w-title">'.get_the_title($post->ID).'</span>';
            $item_output .= '</a></div>';
        }
        wp_reset_postdata();
        $item_output .= '</div></div>';
    }

    return $item_output;
}

// sidebars
add_action('widgets_init', 'wpt_widgets_init');
function wpt_widgets_init()
{
    if (function_exists('register_sidebar')) {
        register_sidebar([
            'name' => esc_html__('Main Sidebar', 'template-theme'),
            'id' => 'sidebar-main',
            'before_widget' => '<div id="%1$s" class="%2$s w-box">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="w-sidebar-title">',
            'after_title' => '</h4>',
        ]);
    }
}
// end

function getCurrentPage()
{
    global $post;

    if ('post' == $post->post_type) {
        $currentPage = 'post';
    } else {
        $currentPage = $post->post_name;
    }

    return $currentPage;
}

// Enqueue scripts and styles.
    function wpt_scripts()
    {
        // Styles
        wp_enqueue_style('fontawesome-all-min', '//use.fontawesome.com/releases/v5.8.1/css/all.css', [], null);
        wp_enqueue_style('wpt-styles-main', get_template_directory_uri().'/css/style.css', [], null);
        wp_enqueue_script('script-custom-script', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js', [], null, true);
        wp_enqueue_script('template-theme', get_template_directory_uri() . '/js/app.js', array('jquery'), true);
        wp_localize_script(
            'template-theme',
            'get_page_vars',
            [
                'currentPage' => getCurrentPage(),
            ]
        );
    }
add_action('wp_enqueue_scripts', 'wpt_scripts', 99);
