<?php
/**
 * functions.php — Own. Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'OWN_VERSION', '2.0.0' );
define( 'OWN_DIR', get_template_directory() );
define( 'OWN_URI', get_template_directory_uri() );

/* ============================================================
   Theme Setup
   ============================================================ */
function own_setup() {
    load_theme_textdomain( 'own', OWN_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ] );

    add_image_size( 'own-card',   800, 450, true );
    add_image_size( 'own-hero',  1600, 900, true );

    register_nav_menus( [
        'global' => __( 'グローバルナビ', 'own' ),
        'footer' => __( 'フッターナビ', 'own' ),
    ] );
}
add_action( 'after_setup_theme', 'own_setup' );

function own_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'own_content_width', 0 );

/* ============================================================
   Enqueue
   ============================================================ */
function own_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'own-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;700;800&family=Noto+Sans+JP:wght@300;400;500&display=swap',
        [], null
    );

    // Theme CSS (style.css = WP header only, theme.css = all styles)
    wp_enqueue_style(
        'own-theme',
        OWN_URI . '/assets/css/theme.css',
        [ 'own-fonts' ],
        OWN_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'own-main',
        OWN_URI . '/assets/js/main.js',
        [], OWN_VERSION, true
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'own_enqueue_assets' );

/* ============================================================
   Custom Post Type: Works
   ============================================================ */
function own_register_post_types() {
    register_post_type( 'works', [
        'labels' => [
            'name'          => __( '制作実績', 'own' ),
            'singular_name' => __( '実績', 'own' ),
            'add_new_item'  => __( '実績を追加', 'own' ),
            'edit_item'     => __( '実績を編集', 'own' ),
        ],
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'menu_icon'     => 'dashicons-portfolio',
        'rewrite'       => [ 'slug' => 'works' ],
        'menu_position' => 5,
    ] );
}
add_action( 'init', 'own_register_post_types' );

function own_register_taxonomies() {
    register_taxonomy( 'works_category', 'works', [
        'labels' => [
            'name'          => __( '実績カテゴリー', 'own' ),
            'singular_name' => __( '実績カテゴリー', 'own' ),
        ],
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => [ 'slug' => 'works-category' ],
    ] );
}
add_action( 'init', 'own_register_taxonomies' );

/* ============================================================
   Customizer
   ============================================================ */
function own_customize_register( WP_Customize_Manager $wp_customize ) {
    $wp_customize->add_panel( 'own_panel', [
        'title'    => __( 'Own. テーマ設定', 'own' ),
        'priority' => 30,
    ] );

    // Hero
    $wp_customize->add_section( 'own_hero', [
        'title' => __( 'Heroセクション', 'own' ),
        'panel' => 'own_panel',
    ] );

    $hero_fields = [
        'own_hero_desc' => [
            'label'   => 'ディスクリプション',
            'default' => "誰もが持っている、自分だけの価値がある。\nWeb制作からSEO・MEO・保守まで、ひとりが一貫してサポートします。",
            'type'    => 'textarea',
        ],
    ];

    foreach ( $hero_fields as $key => $args ) {
        $wp_customize->add_setting( $key, [
            'default'           => $args['default'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ] );
        $wp_customize->add_control( $key, [
            'label'   => $args['label'],
            'section' => 'own_hero',
            'type'    => $args['type'],
        ] );
    }

    // Contact
    $wp_customize->add_section( 'own_contact', [
        'title' => __( 'SNS・連絡先', 'own' ),
        'panel' => 'own_panel',
    ] );

    foreach ( [ 'own_email' => 'メールアドレス', 'own_twitter' => 'X (Twitter) URL', 'own_instagram' => 'Instagram URL' ] as $key => $label ) {
        $wp_customize->add_setting( $key, [
            'default'           => '',
            'sanitize_callback' => $key === 'own_email' ? 'sanitize_email' : 'esc_url_raw',
        ] );
        $wp_customize->add_control( $key, [
            'label'   => $label,
            'section' => 'own_contact',
            'type'    => 'text',
        ] );
    }
}
add_action( 'customize_register', 'own_customize_register' );

/* ============================================================
   Helpers
   ============================================================ */
function own_excerpt_length(): int { return 80; }
add_filter( 'excerpt_length', 'own_excerpt_length' );

function own_excerpt_more(): string { return '…'; }
add_filter( 'excerpt_more', 'own_excerpt_more' );

function own_pagination(): void {
    $links = paginate_links( [
        'prev_text' => '← Prev',
        'next_text' => 'Next →',
        'type'      => 'plain',
    ] );
    if ( $links ) {
        echo '<nav class="pagination" aria-label="' . esc_attr__( 'ページナビゲーション', 'own' ) . '">' . $links . '</nav>';
    }
}

/* ============================================================
   Performance / Security
   ============================================================ */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator' );
