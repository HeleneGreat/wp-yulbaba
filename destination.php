<!--
    Template Name: Destination
 -->


 <?php get_header(); ?>

 <section id="section-cat" class="container">
    

<h2><?php the_title(); ?> <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>
        
        <div class="one-article">
            <div id="cat-content">
                <div class="cat-list center">
                    <?php $id = 13;
                    while($id <17): 
                        query_posts('cat='.$id);
                        ?>
                        <div class="single-dest center">
                            <h3><?php single_cat_title(); ?></h3>
                            <div id="dest-flex" class="flex">
                                <?php $image = get_field('category-image', 'category_'.$id); $size = 'full'; ?>
                                <p><?php echo wp_get_attachment_image($image, $size) ;?></p>
                                <p id="field-details"><?php the_field('details', 'category_'.$id); ?></p>
                            </div>
                            <div class="bouton-info center"><a href="<?php echo get_category_link($id) ;?>">+ d'infos</a></div>
                        </div>
                        <?php $id++;
                    endwhile ; wp_reset_query(  );?>
                </div>  
            </div>
        </div>



    
				
</section>



 <?php get_footer(); ?>
