<?php
/**
 * functions.php — Own. Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'OWN_VERSION', '2.3.1' );
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
   OGP Image (fallback — Rank Math outputs no og:image by default)
   ============================================================ */
function own_ogp_image(): void {
    $landscape = 'https://ownweb.jp/wp-content/uploads/2026/05/ChatGPT_Image_2026%E5%B9%B45%E6%9C%8827%E6%97%A5_20_51_58_compressed.webp';
    $square    = 'https://ownweb.jp/wp-content/uploads/2026/05/ChatGPT_Image_2026%E5%B9%B45%E6%9C%8827%E6%97%A5_19_45_34_compressed.webp';

    echo '<meta property="og:image" content="' . esc_url( $landscape ) . '" />' . "\n";
    echo '<meta property="og:image:width" content="1200" />' . "\n";
    echo '<meta property="og:image:height" content="630" />' . "\n";
    echo '<meta property="og:image:type" content="image/webp" />' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url( $square ) . '" />' . "\n";
}
add_action( 'wp_head', 'own_ogp_image', 5 );

/* ============================================================
   Structured Data (JSON-LD)
   ============================================================ */
function own_structured_data(): void {
    $site_url = 'https://ownweb.jp';

    $organization = [
        '@context' => 'https://schema.org',
        '@type'    => [ 'LocalBusiness', 'ProfessionalService' ],
        '@id'      => $site_url . '/#organization',
        'name'     => 'own.',
        'url'      => $site_url . '/',
        'logo'     => [
            '@type' => 'ImageObject',
            'url'   => $site_url . '/wp-content/uploads/2026/05/ChatGPT_Image_2026年5月27日_19_45_34_compressed.webp',
        ],
        'description'  => '鳥取のホームページ制作・SEO対策・MEO対策。WordPressを基本に、集客できるWebサイト制作とSEO設計を一貫サポート。',
        'telephone'    => '080-6242-1110',
        'email'        => 'ryo.kawakami.biz@gmail.com',
        'address'      => [
            '@type'           => 'PostalAddress',
            'addressRegion'   => '鳥取県',
            'addressCountry'  => 'JP',
        ],
        'areaServed'   => ['鳥取県', '鳥取市', '米子市', '倉吉市', '日本全国'],
        'serviceType'  => ['ホームページ制作', 'WordPress制作', 'SEO対策', 'MEO対策', 'Webサイト保守'],
        'priceRange'   => '¥¥',
        'sameAs'       => [],
    ];

    // Rank Math outputs WebSite schema — only output ProfessionalService to enrich Rank Math's basic Organization
    echo '<script type="application/ld+json">' . wp_json_encode( $organization, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";

    // FAQPage schema — FAQ page only
    if ( is_page( 'faq' ) ) {
        $faqs = [
            [ '鳥取でホームページ制作を依頼すると費用はどのくらいかかりますか？', 'ミニマムプランで15万円〜が目安です。ページ数・デザインの複雑さ・機能によって変動します。まずはご要望をお聞きして無料でお見積りします。' ],
            [ '制作期間はどのくらいかかりますか？', '基本的に1〜2ヶ月が目安です。ご要望・ヒアリング内容・修正回数によって前後します。' ],
            [ 'SEO対策をお願いすると、すぐに検索上位に表示されますか？', 'SEO対策の効果が出るまでには一般的に3〜6ヶ月かかります。地道な改善を継続することで、安定した集客が実現できます。' ],
            [ 'WordPressでサイトを作ってもらえますか？', 'はい。own.ではWordPressを基本として制作しています。公開後にご自身で更新・投稿できる環境を整えます。' ],
            [ '月額費用はかかりますか？', 'Web制作のみであれば制作費のみです。保守プラン（月3万円〜）・SEO対策（月5万円〜）は任意のオプションです。' ],
            [ '鳥取・米子・倉吉エリア以外の会社でもお願いできますか？', 'もちろんです。リモートで全国対応しています。オンラインミーティング・メール・チャットで進めることができます。' ],
            [ '見積もりだけお願いすることはできますか？', 'できます。お見積りは無料です。お問い合わせフォームよりご連絡ください。' ],
        ];

        $faq_schema = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => array_map( fn( $f ) => [
                '@type'          => 'Question',
                'name'           => $f[0],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text'  => $f[1],
                ],
            ], $faqs ),
        ];

        echo '<script type="application/ld+json">' . wp_json_encode( $faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
    }

    // BreadcrumbList — all pages except front page
    if ( ! is_front_page() && is_page() ) {
        $breadcrumb = [
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => 'Home',
                    'item'     => $site_url . '/',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => get_the_title(),
                    'item'     => get_permalink(),
                ],
            ],
        ];

        echo '<script type="application/ld+json">' . wp_json_encode( $breadcrumb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'own_structured_data' );

/* ============================================================
   Thanks Page — noindex
   ============================================================ */
function own_thanks_noindex(): void {
    if ( is_page( 'thanks' ) ) {
        echo '<meta name="robots" content="noindex, nofollow">' . "\n";
    }
}
add_action( 'wp_head', 'own_thanks_noindex', 1 );

/* ============================================================
   Service Schema (JSON-LD)
   ============================================================ */
function own_service_schema(): void {
    if ( ! is_page( 'service' ) ) return;

    $site_url = 'https://ownweb.jp';
    $services = [
        [ 'name' => 'ホームページ制作', 'description' => '集客できるWordPressサイトをSEO設計込みで制作。鳥取の中小企業・個人事業主向けに、ターゲット・キーワード・構成を整理した上でデザイン・構築します。', 'price' => '150000' ],
        [ 'name' => 'SEO対策',         'description' => 'サイト診断・キーワード選定・内部対策・コンテンツ改善・月次レポートまで一貫対応。Googleで上位に出るための仕組みを構築します。',             'price' => '50000' ],
        [ 'name' => 'MEO対策',         'description' => 'Googleマップ・Googleビジネスプロフィールの最適化で、地域のお客さんに見つけてもらう仕組みを作ります。',                                     'price' => '50000' ],
        [ 'name' => 'サイト保守・顧問', 'description' => 'プラグイン更新・バックアップ・セキュリティ対策・文章修正など、運用まわりを丸ごとサポートします。',                                            'price' => '30000' ],
        [ 'name' => 'コンテンツ制作',   'description' => '検索意図を踏まえた構成・執筆・入稿まで一貫対応。SEOに効くブログ記事で長期的に集客できるコンテンツ資産を積み上げます。',                    'price' => '30000' ],
    ];

    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'ItemList',
        'name'     => 'own. サービス一覧',
        'url'      => $site_url . '/service/',
        'itemListElement' => array_map( function( $i, $svc ) use ( $site_url ) {
            return [
                '@type'    => 'ListItem',
                'position' => $i + 1,
                'item'     => [
                    '@type'       => 'Service',
                    'name'        => $svc['name'],
                    'description' => $svc['description'],
                    'provider'    => [ '@id' => $site_url . '/#organization' ],
                    'areaServed'  => '鳥取県',
                    'offers'      => [
                        '@type'         => 'Offer',
                        'price'         => $svc['price'],
                        'priceCurrency' => 'JPY',
                    ],
                ],
            ];
        }, array_keys( $services ), $services ),
    ];

    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
add_action( 'wp_head', 'own_service_schema' );

/* ============================================================
   Performance / Security
   ============================================================ */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator' );
