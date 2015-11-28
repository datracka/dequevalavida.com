<?php $args = array(
    'numberposts' => 10,
    'offset' => 0,
    'category' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true);

$recent_posts = wp_get_recent_posts($args, OBJECT);
foreach ($recent_posts as $recent_post) :

    if (has_post_thumbnail($recent_post->ID)):
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($recent_post->ID), 'single-post-thumbnail'); ?>
        <?php
    endif;

endforeach;
?>

<div class="wrapper">
    <h3 class="title">Recent Posts</h3>
    <?php
    foreach ($recent_posts as $recent_post) : ?>
        <a class="recent-post link" href="#">
            <div class="">
                <?php if (has_post_thumbnail($recent_post->ID)):
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($recent_post->ID), 'single-post-thumbnail'); ?>
                    <img src="<?= $image[0] ?>" alt="<?= $recent_post->post_title ?>">
                <?php endif; ?>
                <footer>
                    <h4><?= $recent_post->post_title ?></h4>
                    <span class="text-small"><?= mysql2date('j M Y', $recent_post->post_date); ?></span>
                </footer>
            </div>
        </a>
    <?php endforeach; ?>
</div>

