<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

/* https://community.theme.co/kb/translation/ */
//add_action( 'after_setup_theme', 'load_child_language' );


function x_content_string($more) {

    return '<a href="' . get_permalink() . '" class="more-link">' . __( 'Leer más', '__x__' ) . '</a>';

}
add_filter( 'the_content_more_link', 'x_content_string' );

