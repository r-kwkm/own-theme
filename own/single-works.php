<?php
/**
 * single-works.php
 * Own. Theme — Single works (portfolio) template
 */

get_header();

$client = get_post_meta( get_the_ID(), '_works_client', true );
$url    = get_post_meta( get_the_ID(), '_works_url',    true );
$period = get_post_meta( get_the_ID(), '_works_period', true );
$role   = get_post_meta( get_the_ID(), '_works_role',   true );
$genre  = get_post_meta( get_the_ID(), '_works_genre',  true );
$terms  = get_the_terms( get_the_ID(), 'works_category' );
?>

<main id="main" class="site-main">

    <!-- ===== WORKS HEADER ===== -->
    <header style="background:var(--surface);padding-top:calc(72px + var(--spacing-sm));padding-bottom:var(--spacing-md);">
        <div class="container">

            <!-- Breadcrumb -->
            <nav aria-label="<?php esc_attr_e( 'パンくずリスト', 'own' ); ?>" style="margin-bottom:1.25rem;">
                <ol style="display:flex;align-items:center;gap:0.5rem;list-style:none;font-family:var(--font-en);font-size:0.75rem;color:var(--muted);">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                           style="color:var(--muted);transition:color .2s;"
                           onmouseover="this.style.color='var(--accent)'"
                           onmouseout="this.style.color='var(--muted)'">Home</a>
                    </li>
                    <li aria-hidden="true" style="opacity:.4;">/</li>
                    <li>
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>"
                           style="color:var(--muted);transition:color .2s;"
                           onmouseover="this.style.color='var(--accent)'"
                           onmouseout="this.style.color='var(--muted)'">Works</a>
                    </li>
                    <li aria-hidden="true" style="opacity:.4;">/</li>
                    <li style="color:var(--ink);"><?php the_title(); ?></li>
                </ol>
            </nav>

            <!-- Service Category Tags -->
            <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                <div style="display:flex;flex-wrap:wrap;gap:0.5rem;margin-bottom:1.25rem;">
                    <?php foreach ( $terms as $term ) : ?>
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="work-card__tag">
                            <?php echo esc_html( $term->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Title -->
            <h1 style="font-family:var(--font-ja);font-size:clamp(1.375rem,2.75vw,2.125rem);font-weight:700;letter-spacing:-0.01em;line-height:1.3;margin-bottom:0.5rem;">
                <?php the_title(); ?>
            </h1>
            <?php if ( $client ) : ?>
                <p style="font-family:var(--font-ja);font-size:0.9375rem;color:var(--muted);margin-bottom:1.75rem;">
                    <?php echo esc_html( $client ); ?>
                </p>
            <?php endif; ?>

            <!-- Meta Row: 業種 / 提供サービス / 期間 -->
            <?php
            $meta_row = [];
            if ( $genre )
                $meta_row['業種'] = $genre;
            if ( $terms && ! is_wp_error( $terms ) )
                $meta_row['提供サービス'] = implode( ' / ', array_map( fn( $t ) => $t->name, $terms ) );
            if ( $period )
                $meta_row['提供期間'] = $period;
            if ( $role )
                $meta_row['担当範囲'] = $role;
            ?>
            <?php if ( $meta_row || $url ) : ?>
                <div style="display:flex;flex-wrap:wrap;align-items:center;gap:2rem;padding-top:1.5rem;border-top:1px solid var(--border);">
                    <?php foreach ( $meta_row as $label => $value ) : ?>
                        <div>
                            <p style="font-family:var(--font-en);font-size:0.6rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase;color:var(--muted);margin-bottom:0.3rem;">
                                <?php echo esc_html( $label ); ?>
                            </p>
                            <p style="font-family:var(--font-ja);font-size:0.9375rem;font-weight:500;color:var(--ink);">
                                <?php echo esc_html( $value ); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                    <?php if ( $url ) : ?>
                        <div style="margin-left:auto;">
                            <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="btn--outline" style="font-size:0.75rem;padding:0.6rem 1.5rem;">
                                サイトを見る
                                <svg width="11" height="11" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                                    <path d="M2 2h8v8M2 10L10 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>
    </header>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- Main Content -->
        <div style="padding-block:var(--spacing-md);">
            <div class="container container--narrow">
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    </article>

    <!-- ===== OTHER WORKS ===== -->
    <?php
    $other_works = new WP_Query( [
        'post_type'      => 'works',
        'posts_per_page' => 3,
        'post__not_in'   => [ get_the_ID() ],
        'post_status'    => 'publish',
        'orderby'        => 'rand',
    ] );
    if ( $other_works->have_posts() ) : ?>
        <section style="background:var(--surface);padding-block:var(--spacing-lg);">
            <div class="container">
                <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:var(--spacing-md);">
                    <div>
                        <p style="font-family:var(--font-en);font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:var(--accent);margin-bottom:0.25rem;">Other Works</p>
                        <h2 style="font-family:var(--font-en);font-size:1.5rem;font-weight:700;letter-spacing:-0.02em;">More Projects</h2>
                    </div>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>" class="btn--text">
                        すべて見る →
                    </a>
                </div>
                <div class="works-grid">
                    <?php while ( $other_works->have_posts() ) : $other_works->the_post(); ?>
                        <article class="work-card">
                            <div class="work-card__thumbnail">
                                <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'own-card' ); endif; ?>
                            </div>
                            <div class="work-card__body">
                                <?php
                                $t = get_the_terms( get_the_ID(), 'works_category' );
                                if ( $t && ! is_wp_error( $t ) ) : ?>
                                    <div class="work-card__tags">
                                        <?php foreach ( $t as $tm ) : ?>
                                            <span class="work-card__tag"><?php echo esc_html( $tm->name ); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <h3 class="work-card__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="work-card__subtitle">
                                    <?php echo esc_html( get_post_meta( get_the_ID(), '_works_client', true ) ); ?>
                                </p>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- ===== CTA ===== -->
    <section class="cta-banner">
        <div class="cta-banner__inner">
            <p class="cta-banner__eyebrow">Next Project</p>
            <h2 class="cta-banner__title">Let's Work<br>Together.</h2>
            <p class="cta-banner__text">
                あなたのサイトも、一緒に作りませんか。<br>
                まずはお気軽にご相談ください。初回相談は無料です。
            </p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary">
                無料相談をする
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                    <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
