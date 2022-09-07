<?php


// cette page affiche tous les articles d'une même catégorie

?>
<?php get_header(); ?>


<section id="one-category" class="container">
    <h2><?php single_cat_title();?> <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>


        <?php if(have_posts()):
            ?>
            <?php while(have_posts()):the_post();?>
        <div class="one-article">
            <h3 class="center"><?php the_title(); ?></h3>
            <div id="cat-content" class="flex">

                <a href="<?php echo get_post_permalink($id) ;?>">

                <div class="cat-img"><?php the_post_thumbnail('medium'); ?></div></a>
                <?php the_excerpt(); ?>
                
            </div>
            <div class="bouton-info"><a href="<?php echo get_post_permalink($id) ;?>">+ d'infos</a></div>
            <div class="star-cat">
                <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" />
                <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" />
                <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" />
            </div>
        </div>
        <?php endwhile; ?>




    <?php else: ?>
		<p>Aucune article n'a été trouvé.</p>
    <?php endif; ?>
    
    <?php the_posts_pagination(); ?>

    
				
</section>

<?php get_footer(); ?>