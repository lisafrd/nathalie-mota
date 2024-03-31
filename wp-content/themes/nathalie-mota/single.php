<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/content-single');

                    // Vérifier si le type de publication est "photo"
                    if (get_post_type() == 'photos') :

                        // Afficher les champs personnalisés ACF 
                ?>
                        <ul class="ACF-container">
                            <div class="content-ACF-container">
                                <li class="li-ACF-photo">RÉFÉRENCE : <?php the_field('reference'); ?></li>
                                <li class="li-ACF-photo">CATÉGORIE : <?php the_field('categorie'); ?></li>
                                <li class="li-ACF-photo">FORMAT : <?php the_field('format'); ?></li>
                                <li class="li-ACF-photo">TYPE : <?php the_field('type'); ?></li>
                                <li class="li-ACF-photo">ANNÉE : <?php the_field('annee'); ?></li>
                            </div>
                            <li class="img-ACF-container"><?php $image = get_field('photo'); ?>
                                <img class="img-ACF" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </li>
                        </ul>

                        <div class="ACF-line"></div>
                <?php
                    endif;
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
