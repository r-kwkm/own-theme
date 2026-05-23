<?php
/**
 * Template Name: Blog List Page
 * page-blog.php — Own. Theme
 */
get_header();

$paged      = get_query_var( 'paged' ) ?: 1;
$blog_query = new WP_Query( [
    'post_type'      => 'post',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'post_status'    => 'publish',
] );
?>

<main id="main">

  <!-- Coming Soon -->
  <section style="padding:10rem 3rem;text-align:center;">
    <div style="max-width:600px;margin-inline:auto;">
      <p style="font-family:var(--font-en);font-size:0.7rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:var(--accent);margin-bottom:2rem;">— Blog</p>
      <h1 style="font-family:var(--font-en);font-size:clamp(2.5rem,6vw,5rem);font-weight:800;letter-spacing:-0.03em;line-height:1.1;color:var(--ink);margin-bottom:2rem;">Coming<br>Soon.</h1>
      <p style="font-size:0.95rem;color:var(--muted);line-height:1.9;margin-bottom:3rem;">Web制作・SEO・MEOに関するコンテンツを準備中です。<br>もうしばらくお待ちください。</p>
      <a href="<?php echo esc_url( home_url('/') ); ?>" style="font-family:var(--font-en);font-size:0.8rem;font-weight:600;letter-spacing:0.08em;color:var(--muted);text-decoration:none;border-bottom:1px solid var(--border);padding-bottom:0.2em;transition:color 0.2s,border-color 0.2s;">← Back to Home</a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
