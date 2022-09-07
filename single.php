<?php 
/*
    Template Name: Page standard
*/
?>
<?php get_header(); ?>

<section id="single" class="container">
        <?php  
        if(have_posts()):while(have_posts()):the_post();?>
            <h2><?php the_title(); ?> <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>
            <div class="center" id="who"><?php the_post_thumbnail('medium'); ?></div>
            <div class="container"><?php the_content(); ?></div>

        
            
        <?php endwhile; endif; ?>
				
</section>

<div id="commentaires" class="container">
    <?php if (in_category('17')) comments_template(); ?>
</div>

<?php get_footer(); ?>