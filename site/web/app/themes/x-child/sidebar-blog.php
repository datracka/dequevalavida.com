<?php

// =============================================================================
// VIEWS/ICON/WP-SIDEBAR.PHP
// -----------------------------------------------------------------------------
// Sidebar output for category 'blog'
// =============================================================================

?>

<?php if ( x_get_content_layout() != 'full-width' ) : ?>

    <aside class="x-sidebar nano" role="complementary">
        <div class="max width nano-content">
            <?php if ( get_option( 'ups_sidebars' ) != array() ) : ?>
                <?php dynamic_sidebar('ups-sidebar-blog-sidebar'); ?>
            <?php else : ?>
                <?php dynamic_sidebar( 'sidebar-main' ); ?>
            <?php endif; ?>
        </div>
    </aside>

<?php endif; ?>