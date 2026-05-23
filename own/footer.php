<!-- FOOTER -->
<footer class="site-footer" role="contentinfo">

  <div class="footer-inner">

    <!-- Brand -->
    <div class="footer-brand">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer-logo">own<span>.</span></a>
      <p class="footer-tagline">鳥取のホームページ制作・SEO対策</p>
      <p class="footer-desc">Webのことが全くわからなくても大丈夫です。<br>小さなお悩みからお気軽にどうぞ。</p>
    </div>

    <!-- Nav -->
    <nav class="footer-nav" aria-label="フッターナビゲーション">
      <div class="footer-nav__col">
        <p class="footer-nav__heading">Menu</p>
        <ul class="footer-nav__list">
          <li><a href="<?php echo esc_url( home_url('/service') ); ?>">サービス</a></li>
          <li><a href="<?php echo esc_url( home_url('/price') ); ?>">料金・プラン</a></li>
          <li><a href="<?php echo esc_url( home_url('/about') ); ?>">own.について</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog') ); ?>">コラム</a></li>
          <li><a href="<?php echo esc_url( home_url('/activity') ); ?>">社会への取り組み</a></li>
        </ul>
      </div>
      <div class="footer-nav__col">
        <p class="footer-nav__heading">Info</p>
        <ul class="footer-nav__list">
          <li><a href="<?php echo esc_url( home_url('/faq') ); ?>">よくある質問</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></li>
          <li><a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">プライバシーポリシー</a></li>
          <li><a href="<?php echo esc_url( home_url('/tokusho') ); ?>">特定商取引法に基づく表示</a></li>
        </ul>
      </div>
    </nav>

    <!-- CTA -->
    <div class="footer-cta">
      <p class="footer-cta__label">まずはお気軽に</p>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="footer-cta__btn">
        無料相談する
        <svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
      </a>
      <p class="footer-cta__note">初回相談無料 / 全国リモート対応</p>
    </div>

  </div>

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <p class="footer-copy">&copy; <?php echo esc_html( date('Y') ); ?> Own. All rights reserved.</p>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
