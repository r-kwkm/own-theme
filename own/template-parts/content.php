<?php
/**
 * template-parts/content.php
 * Own. Theme - Default post card for loops
 */
?>
<article class="post-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="post-card__thumbnail">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
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
