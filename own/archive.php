<?php
/**
 * archive.php
 * Own. Theme - Archive template (category, tag, date, author, custom post type)
 */

get_header(); ?>

<main id="main" class="site-main">

    <!-- Archive Header -->
    <header class="archive-header" style="background-color: var(--color-sub-bg); padding-block: var(--spacing-lg);">
        <div class="container">
            <?php
            $archive_eyebrow = 'Archive';
            if ( is_category() ) {
                $archive_eyebrow = 'Category';
            } elseif ( is_tag() ) {
                $archive_eyebrow = 'Tag';
            } elseif ( is_author() ) {
                $archive_eyebrow = 'Author';
            } elseif ( is_post_type_archive( 'works' ) ) {
                $archive_eyebrow = 'Works';
            } elseif ( is_tax( 'works_category' ) ) {
                $archive_eyebrow = 'Works';
            } elseif ( is_date() ) {
                $archive_eyebrow = 'Archive';
            }
            ?>
            <p style="font-family: var(--font-en); font-size: 0.75rem; font-weight: 500; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-accent); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                <span style="display:inline-block; width:24px; height:1px; background:var(--color-accent);"></span>
                <?php echo esc_html( $archive_eyebrow ); ?>
            </p>

            <h1 style="font-size: clamp(1.75rem, 3.5vw, 2.75rem); letter-spacing: -0.02em; margin-bottom: 0.5rem;">
                <?php
                if ( is_post_type_archive( 'works' ) ) {
                    echo 'Selected Works';
                } else {
                    the_archive_title();
                }
                ?>
            </h1>

            <?php if ( is_post_type_archive( 'works' ) ) : ?>
                <p style="font-family: var(--font-ja); font-size: 1.125rem; font-weight: 700; color: #555;">制作実績</p>
            <?php endif; ?>

            <?php the_archive_description( '<p style="font-family: var(--font-ja); font-size: 0.9375rem; color: #555; margin-top: 1rem; max-width: 600px; line-height: 1.8;">', '</p>' ); ?>

            <!-- Works Category Filter -->
            <?php if ( is_post_type_archive( 'works' ) || is_tax( 'works_category' ) ) :
                $works_cats = get_terms( [ 'taxonomy' => 'works_category', 'hide_empty' => true ] );
                if ( $works_cats && ! is_wp_error( $works_cats ) ) : ?>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: var(--spacing-md);">
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>"
                           style="font-family: var(--font-en); font-size: 0.75rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; padding: 0.4em 1.2em; border-radius: 999px; border: 1.5px solid <?php echo is_post_type_archive( 'works' ) ? 'var(--color-accent)' : 'var(--color-border)'; ?>; color: <?php echo is_post_type_archive( 'works' ) ? 'var(--color-accent)' : '#555'; ?>; background: transparent; transition: all 0.3s ease;">
                            All
                        </a>
                        <?php foreach ( $works_cats as $wcat ) :
                            $is_current = is_tax( 'works_category', $wcat->slug );
                        ?>
                            <a href="<?php echo esc_url( get_term_link( $wcat ) ); ?>"
                               style="font-family: var(--font-en); font-size: 0.75rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; padding: 0.4em 1.2em; border-radius: 999px; border: 1.5px solid <?php echo $is_current ? 'var(--color-accent)' : 'var(--color-border)'; ?>; color: <?php echo $is_current ? 'var(--color-accent)' : '#555'; ?>; background: transparent; transition: all 0.3s ease;">
                                <?php echo esc_html( $wcat->name ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif;
            endif; ?>

        </div>
    </header>

    <!-- Archive Content -->
    <section class="section">
        <div class="container">

            <?php if ( have_posts() ) : ?>

                <?php if ( is_post_type_archive( 'works' ) || is_tax( 'works_category' ) ) : ?>
                    <!-- Works Grid -->
                    <div class="works-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article class="work-card">
                                <div class="work-card__thumbnail">
                                    <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
                                        <?php if ( has_post_thumbnail() ) :
                                            the_post_thumbnail( 'own-thumbnail' );
                                        endif; ?>
                                    </a>
                                </div>
                                <div class="work-card__body">
                                    <div class="work-card__tags">
                                        <?php
                                        $terms = get_the_terms( get_the_ID(), 'works_category' );
                                        if ( $terms && ! is_wp_error( $terms ) ) :
                                            foreach ( $terms as $term ) : ?>
                                                <span class="work-card__tag"><?php echo esc_html( $term->name ); ?></span>
                                            <?php endforeach;
                                        endif; ?>
                                    </div>
                                    <h2 class="work-card__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="work-card__subtitle"><?php echo esc_html( get_post_meta( get_the_ID(), '_works_client', true ) ); ?></p>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                <?php else : ?>
                    <!-- Blog Posts Grid -->
                    <div class="posts-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article class="post-card">
                                <div class="post-card__thumbnail">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'medium_large' ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="post-card__meta">
                                    <time class="post-card__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                        <?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?>
                                    </time>
                                    <?php
                                    $cats = get_the_category();
                                    if ( $cats ) : ?>
                                        <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="post-card__category">
                                            <?php echo esc_html( $cats[0]->name ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <h2 class="post-card__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <p style="font-family: var(--font-ja); font-size: 0.8125rem; color: #666; line-height: 1.7; margin-top: 0.5rem;">
                                    <?php echo esc_html( wp_trim_words( get_the_excerpt(), 40, '…' ) ); ?>
                                </p>
                            </article>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

                <!-- Pagination -->
                <div style="margin-top: var(--spacing-lg);">
                    <?php own_pagination(); ?>
                </div>

            <?php else : ?>

                <div style="text-align: center; padding-block: var(--spacing-xl);">
                    <p style="font-family: var(--font-en); font-size: 1.5rem; font-weight: 700; letter-spacing: -0.02em; margin-bottom: 1rem;">Nothing Found.</p>
                    <p style="font-family: var(--font-ja); font-size: 0.9375rem; color: #666; margin-bottom: var(--spacing-md);">
                        お探しのコンテンツが見つかりませんでした。
                    </p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--outline">
                        ホームに戻る
                    </a>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
