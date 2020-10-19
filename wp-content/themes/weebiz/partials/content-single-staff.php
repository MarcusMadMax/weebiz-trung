    <div class="page-header-title">
        <h2 class="heading-title text-center"><?php the_title()?></h2>
    </div>

	<div class="row">
		<div class="col-md-4">
			<img src="<?php the_field('photo')?>" alt="">
			
		</div>
		<div class="col-md-8">
            <h5><?php the_field('position')?></h5>  
			<?php the_content()?>
		</div>
	</div>

