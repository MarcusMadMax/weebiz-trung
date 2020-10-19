<?php get_header()?>
    <!-- Features -->
    <div class="container index">
    <?php
        $term = get_queried_object();
        echo '<h1>'.$term->name.'</h1>'
        echo '<div>'.get_field('summary', $term).'</div>'//this gets the summary field we created in
        ?>
        <!-- content-index.php -->
        <div class="row">
        <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'project');
            } // end while
        ?>
    </div>
    </div>
<?php get_footer()?>
