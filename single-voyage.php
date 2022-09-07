<?php get_header(); ?>
    <section id="one-category" class="container">

        <?php if(have_posts()):while(have_posts()):the_post();?>
        <h4>Destination : <?php the_category('title') ;?></h4>
        <div class="one-article">
            <h2><?php the_field('nom_voyage'); ?> <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>
            <div id="voyage-content" class="flex">
                <div class="details">
                    <p>Destination principale : <?php the_field('destination_principale') ;?></p>
                    <p>Durée : <?php the_field('nb_jours') ;?> jours</p>
                    <p>Prix : <?php the_field('prix') ;?>€ TTC par personne</p>
                    <p>Nombre de personnes dans le groupe : <?php the_field('nb_personnes') ;?></p>
                    <p>Les enfants sont-ils autorisés ? <?php the_field('enfants') ;?></p>
                    <p>Les animaux sont-ils autorisés ? <?php the_field('animaux') ;?></p>
                    <p>Le transport est-il compris dans le voyage ? <?php the_field('transport') ;?></p>
                </div>   
                <div class="descriptif"><?php the_field('descriptif'); ?></div>
            </div>
            <div id="carousel" class="text-center">
                <span><img src="<?php the_field('photo1') ;?>" alt=""></span>
                <span><img src="<?php the_field('photo2') ;?>" alt=""></span>
                <span><img src="<?php the_field('photo3') ;?>" alt=""></span>
            </div>
        </div>
            


            
        <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>