<?php
/**
 * 404.php
 * Own. Theme - 404 Not Found template
 */

get_header(); ?>

<main id="main" class="site-main">
    <section style="min-height: calc(100svh - 72px); display: flex; align-items: center; padding-block: var(--spacing-xl);">
        <div class="container" style="text-align: center;">

            <p style="font-family: var(--font-en); font-size: clamp(6rem, 15vw, 12rem); font-weight: 800; letter-spacing: -0.05em; line-height: 1; color: var(--color-sub-bg); margin-bottom: 0; user-select: none;" aria-hidden="true">
                404
            </p>

            <p style="font-family: var(--font-en); font-size: 0.75rem; font-weight: 500; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-accent); margin-top: -1rem; margin-bottom: var(--spacing-sm); display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                <span style="display:inline-block; width:24px; height:1px; background:var(--color-accent);"></span>
                Page Not Found
                <span style="display:inline-block; width:24px; height:1px; background:var(--color-accent);"></span>
            </p>

            <h1 style="font-size: clamp(1.5rem, 3vw, 2.5rem); letter-spacing: -0.02em; margin-bottom: var(--spacing-sm);">
                Oops. Lost in Space.
            </h1>

            <p style="font-family: var(--font-ja); font-size: 1rem; color: #666; line-height: 1.85; max-width: 480px; margin-inline: auto; margin-bottom: var(--spacing-lg);">
                お探しのページは存在しないか、移動・削除された可能性があります。<br>
                URLをご確認いただくか、以下からお進みください。
            </p>

            <div style="display: flex; align-items: center; justify-content: center; gap: var(--spacing-sm); flex-wrap: wrap; margin-bottom: var(--spacing-xl);">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
                    ホームへ戻る
                </a>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn--outline">
                    お問い合わせ
                </a>
            </div>

            <!-- Quick Links -->
            <div style="border-top: 1px solid var(--color-border); padding-top: var(--spacing-md); max-width: 560px; margin-inline: auto;">
                <p style="font-family: var(--font-en); font-size: 0.6875rem; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: var(--color-muted); margin-bottom: var(--spacing-sm);">
                    Quick Links
                </p>
                <div style="display: flex; justify-content: center; gap: var(--spacing-md); flex-wrap: wrap;">
                    <?php
                    $quick_links = [
                        'About'    => '/about',
                        'Services' => '/services',
                        'Works'    => '/works',
                        'Blog'     => '/blog',
                        'Contact'  => '/contact',
                    ];
                    foreach ( $quick_links as $label => $path ) : ?>
                        <a href="<?php echo esc_url( home_url( $path ) ); ?>"
                           style="font-family: var(--font-en); font-size: 0.8125rem; font-weight: 600; letter-spacing: 0.05em; color: #555; transition: color 0.3s ease;"
                           onmouseover="this.style.color='var(--color-accent)'"
                           onmouseout="this.style.color='#555'">
                            <?php echo esc_html( $label ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?>
