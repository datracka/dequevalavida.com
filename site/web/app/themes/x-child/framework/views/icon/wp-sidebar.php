<?php

// =============================================================================
// VIEWS/ICON/WP-SIDEBAR.PHP
// -----------------------------------------------------------------------------
// Sidebar output for Icon.
// =============================================================================

?>

<?php if ( x_get_content_layout() != 'full-width' ) : ?>

    <aside class="x-sidebar nano" role="complementary">
        <div class="max width nano-content">
            <?php if ( get_option( 'ups_sidebars' ) != array() ) : ?>
                <?php
                /*select sidebar on category */
                $categories = get_the_category();
                if ($categories[0]->name == "Blog") {
                    get_sidebar('libros');
                } else {
                    get_sidebar('blog');
                }
                ?>
            <?php else : ?>
                <?php dynamic_sidebar( 'sidebar-main' ); ?>
            <?php endif; ?>
        </div>
    </aside>

<?php endif; ?>