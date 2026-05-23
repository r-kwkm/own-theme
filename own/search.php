<?php
/**
 * search.php
 * Own. Theme - Search results template
 */

get_header(); ?>

<main id="main" class="site-main">

    <!-- Search Header -->
    <header class="archive-header" style="background-color: var(--color-sub-bg); padding-block: var(--spacing-lg);">
        <div class="container">
            <p style="font-family: var(--font-en); font-size: 0.75rem; font-weight: 500; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-accent); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                <span style="display:inline-block; width:24px; height:1px; background:var(--color-accent);"></span>
                Search
            </p>
            <h1 style="font-size: clamp(1.5rem, 3vw, 2.5rem); letter-spacing: -0.02em; margin-bottom: 0.75rem;">
                <?php if ( get_search_query() ) : ?>
                    &ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;
                <?php else : ?>
                    Search Results
                <?php endif; ?>
            </h1>
            <?php if ( have_posts() ) : ?>
                <p style="font-family: var(--font-ja); font-size: 0.875rem; color: var(--color-muted);">
                    <?php
                    global $wp_query;
                    printf(
                        esc_html__( '%s 件の検索結果', 'own' ),
                        '<strong>' . number_format_i18n( $wp_query->found_posts ) . '</strong>'
                    );
                    ?>
                </p>
            <?php endif; ?>

            <!-- Search Form -->
            <div style="margin-top: var(--spacing-md); max-width: 560px;">
                <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
                    <div style="display: flex; gap: 0.5rem;">
                        <input
                            type="search"
                            name="s"
                            value="<?php echo esc_attr( get_search_query() ); ?>"
                            placeholder="<?php esc_attr_e( 'キーワードで検索…', 'own' ); ?>"
                            style="flex: 1; padding: 0.75em 1.25em; font-family: var(--font-ja); font-size: 0.9375rem; border: 1.5px solid var(--color-border); border-radius: var(--radius); outline: none; transition: border-color 0.3s ease; background: var(--color-bg);"
                            onfocus="this.style.borderColor='var(--color-accent)'"
                            onblur="this.style.borderColor='var(--color-border)'"
                        >
                        <button type="submit" class="btn btn--primary" style="white-space: nowrap;">
                            検索
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- Results -->
    <section class="section">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <div class="posts-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
                    <?php endwhile; ?>
                </div>
                <div style="margin-top: var(--spacing-lg);">
                    <?php own_pagination(); ?>
                </div>
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
