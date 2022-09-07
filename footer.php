
<footer>
        <div class="pied container flex space-between">

        <div id="social">
        <?php if(function_exists('dynamic_sidebar')){
                dynamic_sidebar('social'); } ?>
        </div>


        <div id="copyright">
                <?php the_custom_logo() ;?>
                <p>Copyright HeleneYulbaba 2022</p>
                <a href="http://localhost/wp-yulbaba/politique-de-confidentialite/">Mentions Légales</a>
        </div>

</div>
</footer>
<?php wp_footer();?>


</body>
</html>
