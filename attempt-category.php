<?php


// cette page affiche tous les articles d'une même catégorie

?>
<?php get_header(); ?>


<section id="one-category" class="container">
    <h2><?php single_cat_title();?> <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>


    <?php if(query_posts('cat=10')){
        // if(have_posts()): while(have_posts()):the_post();
     ?>
     <h2>Ceci est la page destination !!</h2>

<?php }  wp_reset_query(); 
if (have_posts()){ while(have_posts()):the_post();?>
        <div class="one-article">
            <h3 class="center"><?php the_title(); ?></h3>
            <div id="cat-content" class="flex">

                <a href="<?php echo get_post_permalink($id) ;?>">

                <div class="cat-img"><?php the_post_thumbnail('medium'); ?></div></a>
                <?php the_content(); ?>
            </div>
            <div class="star-cat">
                <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" />
                <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" />
                <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" />
            </div>
        </div>
        <?php endwhile; };?>




   
    
    <?php the_posts_pagination(); ?>

    
				
</section>

<?php get_footer(); ?>