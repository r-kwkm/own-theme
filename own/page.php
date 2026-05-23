<?php
/**
 * page.php
 * Own. Theme - Static page template
 */

get_header(); ?>

<main id="main" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>

        <article id="page-<?php the_ID(); ?>" <?php post_class( 'single-page' ); ?>>

            <!-- Page Header -->
            <?php if ( ! is_front_page() ) : ?>
                <header class="page-header" style="background-color: var(--color-sub-bg); padding-block: var(--spacing-lg);">
                    <div class="container container--narrow">
                        <p style="font-family: var(--font-en); font-size: 0.75rem; font-weight: 500; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-accent); margin-bottom: 0.5rem;">
                            <?php echo esc_html( get_post_field( 'post_name', get_the_ID() ) ); ?>
                        </p>
                        <h1 class="page-header__title" style="font-family: var(--font-ja); font-size: clamp(1.75rem, 3.5vw, 2.75rem); font-weight: 700; letter-spacing: 0.01em; line-height: 1.3;">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </header>
            <?php endif; ?>

            <!-- Featured Image -->
            <?php if ( has_post_thumbnail() && ! is_front_page() ) : ?>
                <div style="max-width: var(--container-max); margin-inline: auto; padding-inline: var(--spacing-md); margin-top: var(--spacing-lg);">
                    <?php the_post_thumbnail( 'own-hero', [ 'style' => 'width:100%; border-radius:8px; aspect-ratio:21/7; object-fit:cover;' ] ); ?>
                </div>
            <?php endif; ?>

            <!-- Page Content -->
            <div class="page-body section--sm">
                <div class="container container--narrow">
                    <div class="entry-content">
                        <?php
                        the_content();
                        wp_link_pages( [
                            'before' => '<div class="page-links"><span>' . __( 'ページ:', 'own' ) . '</span>',
                            'after'  => '</div>',
                        ] );
                        ?>
                    </div>
                </div>
            </div>

            <!-- Edit Link (admin only) -->
            <?php edit_post_link(
                __( 'ページを編集', 'own' ),
                '<div class="container container--narrow" style="padding-bottom: var(--spacing-md);"><span class="edit-link">',
                '</span></div>'
            ); ?>

        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
