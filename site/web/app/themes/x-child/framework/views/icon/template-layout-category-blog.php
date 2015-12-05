<?php

// =============================================================================
// VIEWS/ICON/TEMPLATE-BLANK-1.PHP (Container | Header, Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

$stack = x_get_stack();

?>

<?php get_header(); ?>

    <div class="x-main full" role="main">

        <?php
        $category_query_args = array(
            'category_name' => "blog"
        );

        $category_query = new WP_Query( $category_query_args );
        ?>
        <?php if ( $category_query->have_posts() ) : ?>
            <?php while ( $category_query->have_posts() ) : $category_query->the_post() ?>
                <?php x_get_view( $stack, 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php x_get_view( 'global', '_content-none' ); ?>
        <?php endif; ?>


    </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>