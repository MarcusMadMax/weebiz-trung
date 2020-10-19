<?php get_header()?>
    <!-- Features -->
    <div class="container service">

        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'single-service');
            } // end while
        ?>

    </div>
<?php get_footer()?>
