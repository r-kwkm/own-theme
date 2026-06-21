<?php
/**
 * rewrite-ohana-content.php
 * 課題→解決策ペア構成に全面書き直し
 * 実行: wp eval-file wp-content/themes/own/rewrite-ohana-content.php
 */

$post_id  = 89;
$img_url  = wp_get_attachment_url( 76 );

$p_lead   = '<p style="font-size:1.125rem;line-height:1.85;color:var(--muted);margin-bottom:2.5rem;padding-bottom:2.5rem;border-bottom:1px solid var(--border);">鳥取で保護猫の保護・譲渡活動を行う団体「ohana」のWebサイトを、ゼロから設計・開発。社会貢献の一環として、無償でWeb制作・SEO対策を提供しました。</p>';

$fig      = '<figure class="works-screenshot">' . "\n"
          . '  <img src="' . esc_url( $img_url ) . '" alt="ohana-hogoneko.jp — 完成サイト" loading="lazy" />' . "\n"
          . '  <figcaption>ohana-hogoneko.jp &mdash; 完成サイト</figcaption>' . "\n"
          . '</figure>';

$approach = function( $text ) {
    return '<p style="border-left:2px solid var(--accent);padding-left:1rem;margin-top:1rem;">'
         . '<span style="display:block;font-family:var(--font-en);font-size:0.65rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:var(--accent);margin-bottom:0.375rem;">Approach</span>'
         . $text
         . '</p>';
};

$content = implode( "\n\n", [

    '<!-- リード文 -->',
    $p_lead,

    '<!-- サイトプレビュー -->',
    $fig,

    '<!-- クライアント概要 -->',
    '<h2>クライアント概要</h2>',
    '<p>ohanaは、鳥取県内で保護猫の保護・譲渡活動を行う団体です。地域に住む猫たちの保護から、里親探し、譲渡後のサポートまでを一貫して担っています。</p>',
    '<p>この活動の意義に共感し、Web制作とSEOの専門知識を活かして団体を支援したいという想いから、<strong>社会貢献活動の一環として、サイト制作からSEO対策、運用体制の整備までを無償で提供</strong>することになりました。</p>',

    '<!-- 課題と解決策 -->',
    '<h2>課題と解決策</h2>',

    '<h3>認知の経路がInstagramに限定されていた</h3>',
    '<p>活動実績は十分にありましたが、それを知ってもらう手段はInstagramのみ。フォロワーには届くものの、新しい人との接点を広げるには限界があり、ボランティアや支援者の確保が進まない状態が続いていました。</p>',
    $approach( 'SEO設計を組み込んだWebサイトをゼロから構築し、「鳥取 保護猫」などのキーワードで検索から見つかる経路を作りました。あわせてGoogleビジネスプロフィールを整備し、地図検索（MEO）でも露出できる状態に。Instagramを知らない人でも、ohanaにたどり着けるようになりました。' ),

    '<h3>運営者一人にリソースが集中していた</h3>',
    '<p>団体運営はほぼ一人で回しており、Instagramの更新だけで手一杯。サイト制作や運用まで手を広げる余裕がなく、「SNSだけに依存する構造」から抜け出せない状況でした。</p>',
    $approach( 'WordPressで写真や記事をかんたんに更新できる設計にし、サイト運用に費やす時間を最小化しました。Googleアナリティクスも導入し、どんな人がどこからサイトに来ているかをデータで確認できる環境を整えました。' ),

    '<h3>問い合わせ窓口が分散していた</h3>',
    '<p>Instagram DM・電話・メールと、問い合わせの経路が複数に分散。対応漏れはなかったものの、「誰とどこまで話が進んでいるか」を都度確認する手間が、運営者の負担になっていました。</p>',
    $approach( 'サイト上にお問い合わせフォームを設置し、窓口をひとつに集約。フォームへの回答はメール通知で即座に受け取れるため、どの問い合わせも取りこぼしなく管理できる状態になりました。' ),

    '<!-- デザインの意思決定 -->',
    '<h2>デザインの意思決定</h2>',
    '<p>ohanaのブランドカラーには、オレンジ（<strong>#c85a3a</strong>）を採用しました。保護猫活動という性質上、「温かみ」を感じてもらえる色であることを重視した選定です。</p>',
    '<p>ベースカラーには白（#FFFFFF）を採用し、猫たちの写真そのものが主役になるよう、余白を活かしたシンプルな設計にしています。譲渡を検討している人が、迷わず情報を探せることを優先したUI設計です。</p>',

    '<!-- 成果 -->',
    '<h2>成果</h2>',
    '<p>サイト公開後、Instagram経由での里親申し込みが1件、ボランティア申し込みが1件、それぞれ発生しました。既存のInstagramフォロワー基盤（1,000人超）とサイトを連動させたことが、早期の反応につながった一因だと考えています。</p>',
    '<p>ただ、今回の取り組みの本質は、数字そのものより「検索からも見つけてもらえる場所ができた」という構造的な変化にあります。これまでInstagramのフォロワーにしか届かなかった情報が、検索を通じて新しい人にも届く状態になりました。</p>',
    '<p>「鳥取 保護猫」の検索順位は現在20位前後。公開からまだ1ヶ月という段階ですが、日々順位が上昇しており、今後も運営を継続しながら上位表示を目指していきます。</p>',
    '<p>また、問い合わせ窓口を一本化したことで、運営者は対応管理の負担から解放され、保護活動そのものに集中できる時間が増えました。</p>',

] );

$result = wp_update_post( [
    'ID'           => $post_id,
    'post_content' => $content,
], true );

if ( is_wp_error( $result ) ) {
    WP_CLI::error( $result->get_error_message() );
    return;
}
WP_CLI::success( "コンテンツを更新しました (ID=$result)" );
