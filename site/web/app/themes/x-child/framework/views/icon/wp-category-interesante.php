<?php

// =============================================================================
// VIEWS/ICON/WP-CATEGORY.PHP
// -----------------------------------------------------------------------------
// Category page output for Icon.
// =============================================================================

?>

<?php get_header(); ?>

    <div class="x-main full" role="main">
        <div class="x-container offset-bottom">

            <?php x_get_view( 'global', '_category-interesante' ); ?>

        </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>