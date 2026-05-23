<?php
/**
 * single-works.php
 * Own. Theme - Single works (portfolio) template
 */

get_header();

$client   = get_post_meta( get_the_ID(), '_works_client', true );
$url      = get_post_meta( get_the_ID(), '_works_url', true );
$period   = get_post_meta( get_the_ID(), '_works_period', true );
$role     = get_post_meta( get_the_ID(), '_works_role', true );
$terms    = get_the_terms( get_the_ID(), 'works_category' );
?>

<main id="main" class="site-main">

    <!-- Works Header -->
    <header style="background-color: var(--color-sub-bg); padding-block: var(--spacing-lg);">
        <div class="container">
            <nav aria-label="<?php esc_attr_e( 'パンくずリスト', 'own' ); ?>" style="margin-bottom: var(--spacing-sm);">
                <ol style="display: flex; align-items: center; gap: 0.5rem; list-style: none; font-family: var(--font-en); font-size: 0.75rem; color: var(--color-muted);">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: var(--color-muted); transition: color 0.3s ease;" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='var(--color-muted)'">Home</a></li>
                    <li aria-hidden="true" style="opacity: 0.4;">/</li>
                    <li><a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>" style="color: var(--color-muted); transition: color 0.3s ease;" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='var(--color-muted)'">Works</a></li>
                    <li aria-hidden="true" style="opacity: 0.4;">/</li>
                    <li style="color: var(--color-text);"><?php the_title(); ?></li>
                </ol>
            </nav>

            <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-bottom: var(--spacing-sm);">
                    <?php foreach ( $terms as $term ) : ?>
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="work-card__tag">
                            <?php echo esc_html( $term->name ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <h1 style="font-size: clamp(1.75rem, 4vw, 3rem); letter-spacing: -0.02em; margin-bottom: 0.25rem;">
                <?php the_title(); ?>
            </h1>
            <?php if ( $client ) : ?>
                <p style="font-family: var(--font-ja); font-size: 1rem; color: #666;">
                    <?php echo esc_html( $client ); ?>
                </p>
            <?php endif; ?>
        </div>
    </header>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- Hero Image -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div style="max-width: var(--container-max); margin-inline: auto; padding-inline: var(--spacing-md); margin-top: var(--spacing-lg);">
                <?php the_post_thumbnail( 'own-hero', [
                    'style' => 'width:100%; border-radius:8px; aspect-ratio:16/7; object-fit:cover;',
                    'alt'   => get_the_title(),
                ] ); ?>
            </div>
        <?php endif; ?>

        <!-- Content + Meta -->
        <div class="section--sm">
            <div class="container">
                <div style="display: grid; grid-template-columns: 1fr 280px; gap: var(--spacing-xl); align-items: start;">

                    <!-- Body -->
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <!-- Sidebar Meta -->
                    <aside>
                        <div style="position: sticky; top: calc(72px + var(--spacing-md)); background: var(--color-sub-bg); border-radius: 8px; padding: var(--spacing-md); display: flex; flex-direction: column; gap: 1.5rem;">

                            <?php
                            $meta_items = [
                                'Client'   => $client,
                                'Role'     => $role,
                                'Period'   => $period,
                            ];
                            foreach ( $meta_items as $label => $value ) :
                                if ( ! $value ) continue;
                            ?>
                                <div>
                                    <p style="font-family: var(--font-en); font-size: 0.6875rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--color-muted); margin-bottom: 0.4rem;">
                                        <?php echo esc_html( $label ); ?>
                                    </p>
                                    <p style="font-family: var(--font-ja); font-size: 0.9375rem; font-weight: 500; color: var(--color-text);">
                                        <?php echo esc_html( $value ); ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>

                            <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                                <div>
                                    <p style="font-family: var(--font-en); font-size: 0.6875rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--color-muted); margin-bottom: 0.5rem;">
                                        Category
                                    </p>
                                    <div style="display: flex; flex-wrap: wrap; gap: 0.4rem;">
                                        <?php foreach ( $terms as $term ) : ?>
                                            <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="work-card__tag">
                                                <?php echo esc_html( $term->name ); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ( $url ) : ?>
                                <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" class="btn btn--primary" style="width: 100%; justify-content: center; text-align: center;">
                                    サイトを見る
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                                        <path d="M2 2h8v8M2 10L10 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </aside>

                </div>
            </div>
        </div>

    </article>

    <!-- Other Works -->
    <?php
    $other_works = new WP_Query( [
        'post_type'      => 'works',
        'posts_per_page' => 3,
        'post__not_in'   => [ get_the_ID() ],
        'post_status'    => 'publish',
        'orderby'        => 'rand',
    ] );

    if ( $other_works->have_posts() ) : ?>
        <section style="background: var(--color-sub-bg); padding-block: var(--spacing-lg);">
            <div class="container">
                <div style="display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: var(--spacing-md);">
                    <div>
                        <p style="font-family: var(--font-en); font-size: 0.75rem; font-weight: 500; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-accent); margin-bottom: 0.25rem;">Other Works</p>
                        <h2 style="font-size: 1.5rem; letter-spacing: -0.02em;">More Projects</h2>
                    </div>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>" class="btn btn--text">
                        すべて見る →
                    </a>
                </div>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--spacing-md);">
                    <?php while ( $other_works->have_posts() ) : $other_works->the_post(); ?>
                        <article class="work-card" style="background: var(--color-bg);">
                            <div class="work-card__thumbnail">
                                <?php if ( has_post_thumbnail() ) : the_post_thumbnail( 'own-thumbnail' ); endif; ?>
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
                                <p class="work-card__subtitle"><?php echo esc_html( get_post_meta( get_the_ID(), '_works_client', true ) ); ?></p>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- CTA -->
    <section class="cta-banner" style="padding-block: var(--spacing-lg);">
        <div class="container container--narrow" style="text-align: center;">
            <p class="cta-banner__eyebrow">Next Project</p>
            <h2 class="cta-banner__title" style="font-size: clamp(1.75rem, 3.5vw, 3rem);">Let's Work Together.</h2>
            <p class="cta-banner__text">あなたのプロジェクトについてお気軽にご相談ください。</p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--primary">
                無料相談をする →
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
