#!/bin/bash
# ============================================================
# Own. Theme — メニュー自動作成スクリプト
# LocalのSite Shellで実行: bash wp-content/themes/own/setup-menu.sh
# ============================================================

echo "📋 ページIDを取得中..."

SERVICE_ID=$(wp post list --post_type=page --name=service  --field=ID --format=ids)
PRICE_ID=$(wp post list   --post_type=page --name=price    --field=ID --format=ids)
ABOUT_ID=$(wp post list   --post_type=page --name=about    --field=ID --format=ids)
FAQ_ID=$(wp post list     --post_type=page --name=faq      --field=ID --format=ids)
BLOG_ID=$(wp post list    --post_type=page --name=blog     --field=ID --format=ids)
CONTACT_ID=$(wp post list --post_type=page --name=contact  --field=ID --format=ids)
ACTIVITY_ID=$(wp post list --post_type=page --name=activity --field=ID --format=ids)

echo "Service:$SERVICE_ID / Price:$PRICE_ID / About:$ABOUT_ID / FAQ:$FAQ_ID"
echo "Blog:$BLOG_ID / Contact:$CONTACT_ID / Activity:$ACTIVITY_ID"

# ============================================================
# グローバルナビ
# ============================================================
echo ""
echo "🔧 グローバルナビを作成中..."

wp menu delete "グローバルナビ" 2>/dev/null
wp menu create "グローバルナビ"

# --- Service（親） ---
S=$(wp menu item add-post "グローバルナビ" $SERVICE_ID \
  --title="Service" --position=1 --porcelain)

# Serviceドロップダウン
wp menu item add-post "グローバルナビ" $SERVICE_ID \
  --title="Web制作・LP" --parent-id=$S --position=1

wp menu item add-post "グローバルナビ" $SERVICE_ID \
  --title="SEO対策" --parent-id=$S --position=2

wp menu item add-post "グローバルナビ" $SERVICE_ID \
  --title="MEO対策" --parent-id=$S --position=3

wp menu item add-post "グローバルナビ" $SERVICE_ID \
  --title="保守・顧問" --parent-id=$S --position=4

wp menu item add-post "グローバルナビ" $SERVICE_ID \
  --title="コンテンツ制作" --parent-id=$S --position=5

# --- 料金 ---
wp menu item add-post "グローバルナビ" $PRICE_ID \
  --title="Price" --position=2

# --- About（親） ---
A=$(wp menu item add-post "グローバルナビ" $ABOUT_ID \
  --title="About" --position=3 --porcelain)

# Aboutドロップダウン
wp menu item add-post "グローバルナビ" $ABOUT_ID \
  --title="own. について" --parent-id=$A --position=1

wp menu item add-post "グローバルナビ" $FAQ_ID \
  --title="よくある質問" --parent-id=$A --position=2

wp menu item add-post "グローバルナビ" $ACTIVITY_ID \
  --title="社会への取り組み" --parent-id=$A --position=3

# --- Blog ---
wp menu item add-post "グローバルナビ" $BLOG_ID \
  --title="Blog" --position=4

# メニューをロケーションに割り当て
wp menu location assign "グローバルナビ" global

echo "✅ グローバルナビ 完成"

# ============================================================
# フッターナビ
# ============================================================
echo ""
echo "🔧 フッターナビを作成中..."

wp menu delete "フッターナビ" 2>/dev/null
wp menu create "フッターナビ"

wp menu item add-post "フッターナビ" $SERVICE_ID  --title="Service"
wp menu item add-post "フッターナビ" $PRICE_ID    --title="Price"
wp menu item add-post "フッターナビ" $ABOUT_ID    --title="About"
wp menu item add-post "フッターナビ" $BLOG_ID     --title="Blog"
wp menu item add-post "フッターナビ" $CONTACT_ID  --title="Contact"

wp menu location assign "フッターナビ" footer

echo "✅ フッターナビ 完成"

# ============================================================
# 表示設定：トップページ = 静的フロントページ
# ============================================================
echo ""
echo "🏠 フロントページ設定中..."

# トップページ用の固定ページが存在しない場合は作成
HOME_ID=$(wp post list --post_type=page --name=home --field=ID --format=ids 2>/dev/null)
if [ -z "$HOME_ID" ]; then
  HOME_ID=$(wp post create \
    --post_type=page \
    --post_status=publish \
    --post_title="ホーム" \
    --post_name=home \
    --porcelain)
  echo "  ホームページを作成: ID=$HOME_ID"
fi

wp option update show_on_front page
wp option update page_on_front $HOME_ID
wp option update page_for_posts $BLOG_ID

echo "✅ フロントページ設定完了"
echo ""
echo "🎉 すべての設定が完了しました！"
