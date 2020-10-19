    <?php
        global $active_class;
        $link = get_field('url');
    ?>        
            
    <div class="carousel-item <?php echo $active_class?>">
        <img src="<?php the_field('photo')?>" alt="">
        <div class="carousel-caption">
        <h3 class="slide-title animated fadeInDown"><span class="text-primary"><?php the_title()?></span></h3>
        <div class="slide-text animated fadeIn"><?php the_content()?></div>
        <a href="<?php echo $link['url']?>" class="btn btn-lg btn-default-filled animated fadeInUp">
            <?php echo $link['title']?>
        </a>
        </div>
    </div>