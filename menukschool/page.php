<?php get_header(); ?>
<main id="main" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="container">
                    <img class="container__image" src="<?= get_template_directory_uri() ?>/assets/images/default_image.jpg" alt="Default Image">
                </div>

            </article>
            <?php
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>