<?php get_header(); ?>

<main id="page-programming">
    <div class="top-content">
        <?php the_post_thumbnail(); ?>
        <div class="top-label-wrap">
            <?php the_title(); ?>
        </div>
    </div>
    <div class="page-content-wrap">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_footer();
