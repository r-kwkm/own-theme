<?php
/**
 * insert-ohana-screenshot.php
 * リード文の直後にサイトスクリーンショットを挿入する
 * 実行: wp eval-file wp-content/themes/own/insert-ohana-screenshot.php
 */

$post_id  = 89;
$img_id   = 76;
$img_url  = wp_get_attachment_url( $img_id );
$content  = get_post_field( 'post_content', $post_id );

// 既に挿入済みなら何もしない
if ( strpos( $content, 'works-screenshot' ) !== false ) {
    WP_CLI::warning( '画像は既に挿入済みです。スキップします。' );
    return;
}

$screenshot_block = '
<!-- サイトプレビュー -->
<figure class="works-screenshot">
  <img src="' . esc_url( $img_url ) . '" alt="ohana-hogoneko.jp — 完成サイト" loading="lazy" />
  <figcaption>ohana-hogoneko.jp &mdash; 完成サイト</figcaption>
</figure>

';

// リード文 <p>（style付き）の直後に挿入
$updated = preg_replace(
    '/(<p[^>]+color:var\(--muted\)[^>]*>.*?<\/p>)/s',
    '$1' . $screenshot_block,
    $content,
    1 // 最初の1件だけ
);

if ( $updated === $content ) {
    WP_CLI::warning( 'リード文が見つかりませんでした。コンテンツの先頭に追加します。' );
    $updated = $screenshot_block . $content;
}

$result = wp_update_post( [
    'ID'           => $post_id,
    'post_content' => $updated,
], true );

if ( is_wp_error( $result ) ) {
    WP_CLI::error( $result->get_error_message() );
    return;
}

WP_CLI::success( "スクリーンショットを挿入しました (post ID=$result)" );
WP_CLI::log( "  画像URL: $img_url" );
