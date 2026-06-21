<?php
/**
 * setup-works-data.php
 * 実績ページの初期データをセットアップします。
 * LocalのSite Shellで実行:
 *   wp eval-file wp-content/themes/own/setup-works-data.php
 */

// ============================================================
// 1. サービス種別タームを作成
// ============================================================
WP_CLI::log( '' );
WP_CLI::log( '--- サービス種別タームを作成 ---' );

$terms = [ 'Web制作', 'SEO対策', 'MEO対策', '保守・顧問', 'コンテンツ制作' ];
foreach ( $terms as $name ) {
    if ( ! term_exists( $name, 'works_category' ) ) {
        $result = wp_insert_term( $name, 'works_category' );
        if ( is_wp_error( $result ) ) {
            WP_CLI::warning( "タームの作成に失敗: $name — " . $result->get_error_message() );
        } else {
            WP_CLI::success( "作成: $name" );
        }
    } else {
        WP_CLI::log( "スキップ（既存）: $name" );
    }
}

// ============================================================
// 2. ohana 実績を作成
// ============================================================
WP_CLI::log( '' );
WP_CLI::log( '--- ohana 実績を作成 ---' );

$existing = get_page_by_path( 'ohana', OBJECT, 'works' );

if ( $existing ) {
    $post_id = $existing->ID;
    WP_CLI::log( "スキップ（既存）: ohana (ID=$post_id)" );
} else {
    $content = <<<HTML
<!-- wp:heading -->
<h2>クライアント概要</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>ohana（おはな）は、鳥取県を拠点に保護猫の譲渡活動を行う民間ボランティア団体です。代表が個人で運営しており、保護・一時預かり・新しい家族への譲渡までをひとりで担っています。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>own. の代表・川上凌にとって身近な存在だったこの活動を、もっと多くの人に知ってもらいたい——そんな思いから、本案件はプロボノ（費用なし）でお引き受けしました。「ビジネス」ではなく「思い」を届けることが、own. の原点にあるプロジェクトです。</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>課題</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>活動はSNS（Instagram）のみで告知しており、団体名を知らない人がたどり着く手段がほぼありませんでした。具体的には以下の3点が課題でした。</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><li><strong>認知不足：</strong>「鳥取 保護猫」「鳥取 猫 譲渡」などの検索では一切ヒットせず、SNSフォロワー以外への接点がなかった。</li><li><strong>予算の制約：</strong>個人ボランティアのため制作費を捻出できない状況。初期費用ゼロで構築し、公開後の維持費を最小化する必要があった。</li><li><strong>運用体制：</strong>代表はWebの知識がほぼゼロ。公開後にご本人が写真や近況を更新できる仕組みを整える必要があった。</li></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2>提供内容</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><li><strong>WordPress 自社テーマ開発：</strong>既存テンプレートを一切使わず、own. オリジナルテーマをフルスクラッチで制作。軽量・高速かつ管理画面での更新が容易な構造に設計。</li><li><strong>GitHub Actions による CI/CD：</strong>コードをプッシュすると自動でサーバーへデプロイされるパイプラインを構築。制作後の修正コストを削減。</li><li><strong>Rank Math ＋ Google Site Kit によるSEO設計：</strong>「鳥取 保護猫」「鳥取 猫 譲渡」などのキーワードを起点に内部構造とメタ情報を最適化。</li><li><strong>Googleビジネスプロフィール登録：</strong>地域検索への露出を高めるため、Googleマップへの掲載と基本情報の整備を実施。</li><li><strong>コンテンツ設計・執筆：</strong>活動理念・譲渡条件・保護猫の紹介ページを設計・執筆し、訪問者が必要な情報にすぐたどり着ける構成に。</li></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2>デザインの意思決定</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>アクセントカラーには <strong>#c85a3a（テラコッタ）</strong> を採用しました。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>保護猫活動のサイトにありがちな「寂しさ」や「悲壮感」を避け、温かみと生命力を同時に感じさせる色として選択。猫の被毛にも多く見られるアースカラー系のオレンジは、活動の本質である「命をつなぐ」ことへの敬意を表しています。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>UI方針は「写真を主役にする」こと。保護猫たちの表情がもっとも強いメッセージになるため、レイアウトはシンプルに保ちつつ、写真が大きく・美しく見える余白設計を徹底しました。</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>成果</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>公開後【XX】ヶ月で、主要キーワードの検索順位が以下のように推移しました。</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><li>「鳥取 保護猫 譲渡」：圏外 → <strong>【○位】</strong></li><li>「鳥取 猫 里親」：圏外 → <strong>【○位】</strong></li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>また、Instagramのプロフィールからサイトへの流入が増加し、<strong>Instagram経由での初回お問い合わせ（譲渡希望）</strong>が発生。SNS単独の運用では得られなかった、"検索から出会う"という接点が生まれました。</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><em>※ 数値は後日更新予定です。</em></p>
<!-- /wp:paragraph -->
HTML;

    $post_id = wp_insert_post( [
        'post_type'    => 'works',
        'post_status'  => 'publish',
        'post_title'   => 'ohana｜保護猫譲渡団体のWebサイト制作',
        'post_name'    => 'ohana',
        'post_content' => $content,
    ], true );

    if ( is_wp_error( $post_id ) ) {
        WP_CLI::error( $post_id->get_error_message() );
        return;
    }
    WP_CLI::success( "作成: ohana (ID=$post_id)" );
}

// ============================================================
// 3. メタ情報を設定
// ============================================================
update_post_meta( $post_id, '_works_client', '保護猫ボランティア ohana（鳥取）' );
update_post_meta( $post_id, '_works_genre',  'NPO・ボランティア' );
update_post_meta( $post_id, '_works_period', '2025年10月〜' );
update_post_meta( $post_id, '_works_role',   '企画 / デザイン / 開発 / SEO / MEO' );
update_post_meta( $post_id, '_works_url',    'https://ohana-hogoneko.jp' );
WP_CLI::success( 'メタ情報を設定しました' );

// ============================================================
// 4. サービス種別タームを割り当て
// ============================================================
$assign = [ 'Web制作', 'SEO対策', 'MEO対策' ];
$term_ids = [];
foreach ( $assign as $name ) {
    $term = get_term_by( 'name', $name, 'works_category' );
    if ( $term ) {
        $term_ids[] = (int) $term->term_id;
    }
}
if ( $term_ids ) {
    wp_set_post_terms( $post_id, $term_ids, 'works_category' );
    WP_CLI::success( 'サービス種別を割り当てました: ' . implode( ', ', $assign ) );
}

// ============================================================
// 5. パーマリンクをフラッシュ
// ============================================================
flush_rewrite_rules();
WP_CLI::success( 'パーマリンクをフラッシュしました' );

WP_CLI::log( '' );
WP_CLI::log( '--- セットアップ完了 ---' );
WP_CLI::log( '  /works/       → 実績一覧' );
WP_CLI::log( '  /works/ohana/ → ohana 詳細' );
