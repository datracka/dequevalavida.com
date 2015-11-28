<article <?php post_class('row article'); ?>>
    <a class="counter">3</a>
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 custom-col">
        <div id="post-container">
            <div class="post-wrapper">
                <a href="<?php the_permalink(); ?>" class="link">
                <h2 class="post-title">
                    <?php the_title(); ?>
                </h2></a>

                <p class="text-center date"><?php get_template_part('templates/entry-meta'); ?></p>

                <div class="thumbnail">
                    <img src="http://dequevalavida.local/app/uploads/2015/11/fotolavidadepi5351.jpg" alt="">
                </div>
                <p class="post-summary"><?php the_excerpt(); ?>
                </p>

            </div>
        </div>
    </div>
</article>
