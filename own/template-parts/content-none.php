<?php
/**
 * template-parts/content-none.php
 * Own. Theme - No content found
 */
?>
<div style="text-align: center; padding-block: var(--spacing-xl);">
    <p style="font-family: var(--font-en); font-size: 1.5rem; font-weight: 700; letter-spacing: -0.02em; margin-bottom: 1rem;">Nothing Found.</p>

    <?php if ( is_search() ) : ?>
        <p style="font-family: var(--font-ja); font-size: 0.9375rem; color: #666; margin-bottom: var(--spacing-md);">
            「<?php echo esc_html( get_search_query() ); ?>」に一致するコンテンツが見つかりませんでした。<br>別のキーワードでお試しください。
        </p>
        <?php get_search_form(); ?>
    <?php else : ?>
        <p style="font-family: var(--font-ja); font-size: 0.9375rem; color: #666; margin-bottom: var(--spacing-md);">
            お探しのコンテンツはまだ公開されていません。
        </p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--outline">
            ホームに戻る
        </a>
    <?php endif; ?>
</div>
