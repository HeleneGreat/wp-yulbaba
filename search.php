


<?php get_header();?>

<section class="container">
    <h2>Résultats de recherche pour "<?php echo get_search_query();?>" <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>

    <?php get_search_form(); ?>

    
        <p id="vos-resultats">
        <?php
        $count = $wp_query->found_posts; //$wp_query est une variable globale contenant les résultats des requêtes
        $several = ($count<=1) ? '' : 's'; //pluriel

        if ($count>0) : $output = $count.' résultat'.$several.' pour la recherche';
        else : $output = 'Aucun résultat pour la recherche';
        endif;
        $output .= ' "<span class="terms_search">'. get_search_query() .'</span>"';
        echo $output;
        ?>
        </p>
        <div class="container flex space-between">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- 1. S'il y a au moins un résultat -->

            <div class="one-article article_found" id="post-<?php the_ID(); ?>">
            
                <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <div id="cat-content">
                <div class="cat-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
                    <?php the_excerpt(); ?>
                    <div class="bouton-info center"><a href="<?php echo get_post_permalink($id) ;?>">+ d'infos</a></div>
                </div>
    
    </div>
        <?php
        endwhile;
        else:
        ?>
            <!-- 2. Si pas de résultat -->
        <p>Votre recherche est infructueuse. Veuillez essayer avec d'autres termes de recherche.</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer();?>