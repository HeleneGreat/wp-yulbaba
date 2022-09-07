<?php get_header(); ?>
    <section class="container">
        <h2>Vous êtes perdus ? <img class="star" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/etoile.png" /></h2>
        <p class="text-center">Comme c'est embarrassant, il semble que vous ayez cliqué sur un lien cassé...</p>
        <p class="text-center">Aidez-vous du menu ci-dessus pour retrouver votre chemin.</p>
        <a href="<?php echo get_bloginfo('url'); ?>/category/blog">
            <div id="lost" class="flex">
                <p>Vous pouvez aussi me rejoindre sur mon <span class="lien">blog</span> et voyager en première classe jusqu'au bout du monde. <br><br><br>Attachez votre ceinture, le décolage est imminant...</p>
                <img class="" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/travel.gif" />
            </div>
        </a>
    </section>
<?php get_footer(); ?>