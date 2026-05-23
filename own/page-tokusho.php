<?php
/**
 * Template Name: 特定商取引法に基づく表示
 * page-tokusho.php — Own. Theme
 */
get_header(); ?>

<main id="main">

  <!-- Page Header -->
  <div class="page-hero">
    <div style="max-width:1200px;margin-inline:auto;">
      <nav class="page-hero__breadcrumb" aria-label="パンくずリスト">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
        <span>/</span>
        <span>特定商取引法に基づく表示</span>
      </nav>
      <p class="page-hero__num">— Legal</p>
      <h1 class="page-hero__en">Specified Commercial<br>Transactions Act.</h1>
      <p class="page-hero__ja">特定商取引法に基づく表示</p>
    </div>
  </div>

  <!-- Body -->
  <section class="page-body">
    <div class="privacy-body">

      <table class="tokusho-table">
        <tbody>
          <tr>
            <th>販売事業者名</th>
            <td>own.</td>
          </tr>
          <tr>
            <th>運営責任者</th>
            <td>川上 凌</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>
              鳥取県鳥取市気高町<br>
              <span style="font-size:0.8rem;color:var(--muted);">※ 請求があった場合は遅滞なく開示いたします。</span>
            </td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>
              お問い合わせフォームよりご連絡ください。<br>
              <a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせはこちら</a>
            </td>
          </tr>
          <tr>
            <th>サービス内容</th>
            <td>ホームページ制作・SEO対策・MEO対策・サイト保守・コンテンツ制作</td>
          </tr>
          <tr>
            <th>販売価格</th>
            <td>各サービスページおよびお見積りにて提示する金額（税込）</td>
          </tr>
          <tr>
            <th>料金以外の費用</th>
            <td>サーバー・ドメイン費用など、第三者サービスの利用料は別途お客様負担となります。</td>
          </tr>
          <tr>
            <th>支払方法</th>
            <td>銀行振込</td>
          </tr>
          <tr>
            <th>支払時期</th>
            <td>着手時50%・納品時50%（別途ご相談可）</td>
          </tr>
          <tr>
            <th>サービス提供時期</th>
            <td>ご契約後、ヒアリングを経て制作を開始します。納期はご契約時にお伝えします。</td>
          </tr>
          <tr>
            <th>返品・キャンセルについて</th>
            <td>
              制作着手後のキャンセルにつきましては、着手金（制作費の50%）はご返金できません。<br>
              納品物に重大な瑕疵がある場合は、誠実に対応いたします。<br>
              詳細はご契約時にご確認ください。
            </td>
          </tr>
          <tr>
            <th>動作環境</th>
            <td>納品物はモダンブラウザ（Chrome・Firefox・Safari・Edge 最新版）での動作を保証します。</td>
          </tr>
        </tbody>
      </table>

      <p class="privacy-updated">最終更新日：<?php echo esc_html( date('Y年n月j日') ); ?></p>

    </div>
  </section>

</main>
<?php get_footer(); ?>
