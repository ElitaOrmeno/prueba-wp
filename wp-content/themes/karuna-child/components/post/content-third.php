<?php // Repeater FEATURES: Check rows exists.
	if( have_rows('features') ):?>
	<div class="features container-fluid">
		<h3 class="the-title py-5"><?php the_title(); ?></h3>
		<div class="features-content"><?php the_content(); ?></div>
		<div id="flex" class="row"><?php
			// Loop through rows.
			while( have_rows('features') ) : the_row(); 
			// Load sub field value.
				$title = get_sub_field('title');
				$description = get_sub_field('description');
			?>
				<div class="col-md-6 features-text">
					<h4 class="pb-3"><?php echo  $title; ?></h4>
					<div class="pb-3"><?php echo  $description; ?></div>
				</div>

			<?php // End loop.
			endwhile;
			?>
		</div>
	</div>
<?php endif;?> 