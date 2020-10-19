<!-- Start Image Service Box 1 -->
<div class="col-md-4">
    <div class="image-service-box">
        <img src="<?php the_field('photo')?>" alt="" />
        <div class="service-text">
        <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
        <p><?php the_field('summary')?></p>
        </div>
    </div>
</div>