<?php
/**
 * sidebar.php
 * Own. Theme - Sidebar template
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
    return;
}
?>

<aside class="sidebar" role="complementary" aria-label="<?php esc_attr_e( 'サイドバー', 'own' ); ?>">
    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
</aside>
