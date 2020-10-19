    <!-- Features -->
    <div class="container features">
      
      <div class="page-header-title">
        <h2 class="heading-title text-center">Features</h2>
      </div>

      <div class="features-wrap">
        <div class="row">

        <?php

            $args = array('post_type' => 'feature');
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/content', 'feature');
            }

            /* Restore original Post Data */
            wp_reset_postdata();

        ?>

         
        </div>
      </div>

    </div>