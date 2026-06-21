<?php
/**
 * update-ohana-content.php
 * ohana 実績ページの本文・メタ情報を更新する
 * 実行: wp eval-file wp-content/themes/own/update-ohana-content.php
 */

$post_id = 89;

// ============================================================
// 1. 投稿タイトル・エクサープト（一覧用サマリー）
// ============================================================
$excerpt = '鳥取で保護猫の保護・譲渡活動を行う団体「ohana」のWebサイトを、ゼロから設計・開発。社会貢献の一環として、無償でWeb制作・SEO対策を提供しました。';

// ============================================================
// 2. 本文 HTML
// ============================================================
$content = <<<HTML
<!-- リード文 -->
<p style="font-size:1.125rem;line-height:1.85;color:var(--muted);margin-bottom:2.5rem;padding-bottom:2.5rem;border-bottom:1px solid var(--border);">鳥取で保護猫の保護・譲渡活動を行う団体「ohana」のWebサイトを、ゼロから設計・開発。社会貢献の一環として、無償でWeb制作・SEO対策を提供しました。</p>

<!-- クライアント概要 -->
<h2>クライアント概要</h2>
<p>ohanaは、鳥取県内で保護猫の保護・譲渡活動を行う団体です。地域に住む猫たちの保護から、里親探し、譲渡後のサポートまでを一貫して担っています。</p>
<p>この活動の意義に共感し、Web制作とSEOの専門知識を活かして団体を支援したいという想いから、<strong>社会貢献活動の一環として、サイト制作からSEO対策、運用体制の整備までを無償で提供</strong>することになりました。</p>

<!-- 課題 -->
<h2>課題</h2>

<h3>認知の経路がInstagramに限定されていた</h3>
<p>ohanaの活動実績は十分にありましたが、それを知ってもらう経路はInstagramのみに限られていました。Instagramは「すでにフォローしてくれている人」には情報が届きますが、新しい人との接点を広げるには限界があります。その結果、ボランティアの確保や支援金の獲得が思うように進まない状態が続いていました。</p>

<h3>運営者一人にリソースが集中していた</h3>
<p>団体の運営は実質的に一人で担われており、Instagramの運用だけで手一杯という状況でした。サイト制作や運用にまで手を広げる余裕はなく、結果として「Instagramだけに依存している状態」から抜け出せない構造になっていました。</p>

<h3>問い合わせ窓口が分散していた</h3>
<p>Instagramのダイレクトメッセージ、電話、メールと、問い合わせの経路が複数に分かれていました。対応漏れが起きていたわけではありませんが、「どこで誰とどこまで話が進んでいるか」を都度確認する手間が、運営者の負担になっていました。</p>

<!-- 提供内容 -->
<h2>提供内容</h2>
<ul>
<li><strong>サイトをゼロから作った：</strong>既存のテンプレートに頼らず、ohanaの活動内容にぴったり合う形で、サイトの土台から作り上げました。見た目だけでなく、裏側の仕組みも含めてすべて手作りです。</li>
<li><strong>更新やトラブルに強い仕組みを整えた：</strong>サイトの中身を直すたびに、自動で安全に反映される仕組みを作りました。サーバーの引っ越しも済ませているので、これから長く安心して使えます。</li>
<li><strong>検索に出てくるようにした：</strong>Googleで「鳥取 保護猫」のように検索したときに、サイトが見つかりやすくなるよう、内部の設定を一通り整えました。あわせて、どんな人がどんな言葉で検索してサイトに来ているかを、データで確認できるようにしています。</li>
<li><strong>Googleマップに表示されるようにした：</strong>地図や「近くの保護猫団体」といった検索でも見つけてもらえるよう、Googleの登録を行いました。</li>
<li><strong>問い合わせをひとつにまとめた：</strong>これまでInstagram・電話・メールに分かれていた問い合わせを、サイト上のフォームひとつに集約しました。団体内でのやり取りも整理し、誰がどこまで対応したかが一目でわかるようにしています。</li>
<li><strong>猫たちの情報を見やすく整理した：</strong>保護している猫一頭一頭のプロフィールを、サイト上で見やすく整理しました。見に来た人が、欲しい情報にすぐたどり着けるようになっています。</li>
</ul>

<!-- デザインの意思決定 -->
<h2>デザインの意思決定</h2>
<p>ohanaのブランドカラーには、オレンジ（<strong>#c85a3a</strong>）を採用しました。保護猫活動という性質上、「温かみ」を感じてもらえる色であることを重視した選定です。</p>
<p>ベースカラーには白（#FFFFFF）を採用し、猫たちの写真そのものが主役になるよう、余白を活かしたシンプルな設計にしています。譲渡を検討している人が、迷わず情報を探せることを優先したUI設計です。</p>

<!-- 成果 -->
<h2>成果</h2>
<p>サイト公開後、Instagram経由での里親申し込みが1件、ボランティア申し込みが1件、それぞれ発生しました。既存のInstagramフォロワー基盤（1,000人超）とサイトを連動させたことが、早期の反応につながった一因だと考えています。</p>
<p>ただ、今回の取り組みの本質は、数字そのものより「検索からも見つけてもらえる場所ができた」という構造的な変化にあります。これまでInstagramのフォロワーにしか届かなかった情報が、検索を通じて新しい人にも届く状態になりました。</p>
<p>「鳥取 保護猫」の検索順位は現在20位前後。公開からまだ1ヶ月という段階ですが、日々順位が上昇しており、今後も運営を継続しながら上位表示を目指していきます。</p>
<p>また、問い合わせ窓口を一本化したことで、運営者は対応管理の負担から解放され、保護活動そのものに集中できる時間が増えました。</p>

<!-- CTA -->
<div style="margin-top:3rem;padding:2.5rem;background:var(--surface);border-radius:8px;text-align:center;">
<p style="font-family:var(--font-en);font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;color:var(--accent);margin-bottom:1rem;">Next Step</p>
<h2 style="font-family:var(--font-ja);font-size:clamp(1.25rem,2.5vw,1.625rem);font-weight:700;letter-spacing:0.01em;border:none;padding:0;margin:0 0 1rem;">鳥取で、想いを伝えるサイトを作りませんか。</h2>
<p style="font-size:0.9375rem;color:var(--muted);line-height:1.8;margin-bottom:1.75rem;">活動の意義や実績が、正しく多くの人に届くようなサイト設計・SEO対策をサポートします。</p>
<a href="/contact" class="btn btn--primary" style="display:inline-flex;align-items:center;gap:8px;">
お問い合わせはこちら
<svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
</a>
</div>
HTML;

// ============================================================
// 3. 投稿を更新
// ============================================================
$result = wp_update_post( [
    'ID'           => $post_id,
    'post_title'   => 'ohana-hogoneko.jp（鳥取の保護猫団体サイト制作）',
    'post_excerpt' => $excerpt,
    'post_content' => $content,
], true );

if ( is_wp_error( $result ) ) {
    WP_CLI::error( $result->get_error_message() );
    return;
}
WP_CLI::success( "投稿を更新しました (ID=$result)" );

// ============================================================
// 4. メタ情報を更新
// ============================================================
update_post_meta( $post_id, '_works_genre',  '保護猫団体' );
update_post_meta( $post_id, '_works_client', 'ohana（鳥取）' );
delete_post_meta( $post_id, '_works_period' );
delete_post_meta( $post_id, '_works_role' );

WP_CLI::success( 'メタ情報を更新しました' );
WP_CLI::log( '' );
WP_CLI::log( '  タイトル   : ohana-hogoneko.jp（鳥取の保護猫団体サイト制作）' );
WP_CLI::log( '  業種       : 保護猫団体' );
WP_CLI::log( '  エクサープト: ' . mb_substr( $excerpt, 0, 40 ) . '…' );
WP_CLI::log( '' );
WP_CLI::success( 'Done. https://own.local/works/ohana/ を確認してください。' );
HTML;
