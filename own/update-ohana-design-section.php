<?php
/**
 * update-ohana-design-section.php
 * 「デザインの意思決定」セクションを差し替え
 * 実行: wp eval-file wp-content/themes/own/update-ohana-design-section.php
 */

$post_id = 89;
$content = get_post_field( 'post_content', $post_id );

$old = '<!-- デザインの意思決定 -->

<h2>デザインの意思決定</h2>

<p>ohanaのブランドカラーには、オレンジ（<strong>#c85a3a</strong>）を採用しました。保護猫活動という性質上、「温かみ」を感じてもらえる色であることを重視した選定です。</p>

<p>ベースカラーには白（#FFFFFF）を採用し、猫たちの写真そのものが主役になるよう、余白を活かしたシンプルな設計にしています。譲渡を検討している人が、迷わず情報を探せることを優先したUI設計です。</p>';

$new = '<!-- サイト制作で意識したこと -->

<h2>サイト制作で意識したこと</h2>

<p>サイト制作において、見た目の凝ったデザインを追求することよりも優先したのは、訪問した人が迷わず行動できる動線を作ることでした。</p>

<p>ohanaの場合、サイトに来る人がしたい行動は明確です。「猫を見る」「里親になりたい」「支援したい」「問い合わせたい」。この行動にたどり着くまでの距離をできるだけ短くすることに、設計の力を注いでいます。</p>

<p>色やレイアウトといったビジュアル面は、AIによる提案をベースに、ohanaの雰囲気に合う形に調整する形で決めました。オレンジ（#c85a3a）というアクセントカラーも、保護猫活動に温かみを添えるという観点で違和感のない色を採用しています。</p>

<p>見た目の良さは大事ですが、それ自体が目的になってしまうと、本来の目的（里親が見つかる、支援が集まる、ボランティアが増える）からは離れてしまいます。デザインは、動線を成立させるための手段として捉えています。</p>';

if ( strpos( $content, 'デザインの意思決定' ) === false ) {
    WP_CLI::error( '対象セクションが見つかりませんでした。' );
    return;
}

$updated = str_replace( $old, $new, $content );

if ( $updated === $content ) {
    // 改行の違いを吸収するために正規表現で試みる
    $updated = preg_replace(
        '/<!-- デザインの意思決定 -->.*?<h2>デザインの意思決定<\/h2>.*?<\/p>(?=\s*\n\n<!-- 成果)/s',
        $new,
        $content
    );
}

if ( $updated === $content || $updated === null ) {
    WP_CLI::error( '置換できませんでした。コンテンツの形式を確認してください。' );
    return;
}

$result = wp_update_post( [ 'ID' => $post_id, 'post_content' => $updated ], true );

if ( is_wp_error( $result ) ) {
    WP_CLI::error( $result->get_error_message() );
    return;
}
WP_CLI::success( "セクションを更新しました (ID=$result)" );
