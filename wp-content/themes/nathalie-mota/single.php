<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content-single');
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
