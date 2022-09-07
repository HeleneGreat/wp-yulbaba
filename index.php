<?php get_header();?>

<!-- SLIDER (only desktop) -->
<div id="slider">
    <?php echo do_shortcode('[metaslider id="79"]'); ?>
</div>

<!-- 4 catégories -->
<section id="section-cat" class="container">
    <h2>Yulbaba vous propose <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>
    




<!-- <?php the_field('category-image', 'category_'.$id) ;?> -->


    <div class="cat-list center flex">
        <?php $id = 13;
        while($id <17): 
        query_posts('cat='.$id);?>
            <div class="single-cat">
                <div>
                    <?php $image = get_field('category-image', 'category_'.$id); $size = 'full'; ?>
                    <?php echo wp_get_attachment_image($image, $size) ;?>
                    <h3><?php single_cat_title(); ?></h3>
                    <?php echo category_description($id); ?>
                </div>
                <div>
                    <div class="bouton-info"><a href="<?php echo get_category_link($id) ;?>">+ d'infos</a></div>
                </div>
            </div>
            <?php $id++;
        endwhile ; wp_reset_query(  );?>
    </div>  
</section>

<!-- pinned article -->
<section id="vogue" class="container">
    <h2>Yulbaba, destination en vogue <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>
    <!-- boucle pour afficher les articles épinglés : -->
    <div class="container flex space-between">
    <?php if(have_posts()):?>
    <?php while(have_posts()):the_post(); ?>
        <!-- trouver les articles épinglés (sticky) : -->
        <?php if(is_sticky()){?>
            <div id="vogue-text" class="center ">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
            <div id="vogue-img" class="center ">
                <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', ['class' => 'vogue-img']); ?></a></p>
            </div>
        <?php }; endwhile; endif; ?>
    </div>
</section>

<!-- 2 testimonials -->
<section class="container">
    <h2>Yulbaba et vos témoignages <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>
    <div class="flex space-between">
        <?php query_posts('cat=6') ;?>
        <?php if(have_posts()):?>
        <?php $count = 0;
            while(have_posts()):the_post();
            $count++;
            if($count <=2){ ?>
        <div class="testimonial center flex space-between">
            <div class="testimonial-text">
                <p class="quote"><span class="dashicons dashicons-format-quote"></span></p>
                <?php the_content() ;?>
                <p class="signature"><span><?php the_field('signature') ;?></span></p>
            </div>
            <div>
                <?php the_post_thumbnail('medium'); ?>
            </div>
        </div>
        <?php }; endwhile; endif; wp_reset_query(); ?>
    </div>
</section>


<?php get_footer(); ?>

