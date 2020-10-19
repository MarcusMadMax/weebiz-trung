<?php get_header() ?>
 
    <!-- Container -->
    <div class="container staff">
    <?php
      	while (have_posts()) :
      		the_post();
         	get_template_part('partials/content','single-staff');
   		endwhile;
    ?>
    </div>

<?php get_footer()?>