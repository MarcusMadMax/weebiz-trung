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

<div class="row mtb-50">
        <div class="col-md-12">
          <!-- Portfolio Controller/Buttons -->
          <div class="controls text-center wow fadeInUpQuick" data-wow-delay=".6s">
            <a class="filter active btn btn-common" data-filter="all">
              All 
            </a>

            <?php
            $terms = get_terms( 'type', array('hide_empty' => false));
            foreach($terms as $term){
                echo '<a class="filter btn btn-common" data-filter=".'.$term->slug.'">'.$term->name.'</a>';
            }
            //here we filter the terms (tabs on top)
            ?>

          </div>
          <!-- Portfolio Controller/Buttons Ends-->
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row wow fadeInUpQuick" data-wow-delay="0.8s">

        <?php

            $args = array('post_type' => 'Project');
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/content', 'project');
            }

            /* Restore original Post Data */
            wp_reset_postdata();

        ?>

        </div>
      </div>

    </div>
<?php get_footer()?>
