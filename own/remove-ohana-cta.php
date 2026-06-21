<?php
/**
 * remove-ohana-cta.php
 * ohana 本文末尾の CTA ブロックを削除する
 * 実行: wp eval-file wp-content/themes/own/remove-ohana-cta.php
 */

$post_id = 89;
$content = get_post_field( 'post_content', $post_id );

// <!-- CTA --> 以降を除去
$updated = preg_replace( '/\s*<!-- CTA -->.*$/s', '', $content );

if ( $updated === $content ) {
    WP_CLI::warning( 'CTA ブロックが見つかりませんでした（既に削除済みか？）' );
    return;
}

$result = wp_update_post( [
    'ID'           => $post_id,
    'post_content' => $updated,
], true );

if ( is_wp_error( $result ) ) {
    WP_CLI::error( $result->get_error_message() );
    return;
}

WP_CLI::success( "CTA ブロックを削除しました (ID=$result)" );
