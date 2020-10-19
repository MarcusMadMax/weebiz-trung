<?php get_header()?>
    <!-- Features -->
    <div class="container index">
       
        <!-- content-index.php -->
        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'index');
            } // end while
        ?>

    </div>
<?php get_footer()?>
