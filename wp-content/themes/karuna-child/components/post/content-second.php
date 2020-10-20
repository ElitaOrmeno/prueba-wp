<?php // Repeater GRUPO_1: Check rows exists.
    if( have_rows('grupo_1') ): ?>
    <div class="container-fluid how-it-works px-5">
        <h3 class="the-title mb-5"><?php the_title(); ?></h3>
        <div class="the-content"><?php the_content(); ?></div>
        <div id="flex" class="row">
        <?php
        // Loop through rows.
        while( have_rows('grupo_1') ) : the_row(); 
        // Load sub field value.
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
        ?>
            <div class="col-md-4">
                <img class="pb-5" src="<?php echo  $image; ?>" alt="">
                <h4 class="font-weight-bold"><?php echo  $title; ?></h4>
                <div class="px-5"><?php echo  $description; ?></div>
            </div>

    <?php // End loop.
        endwhile;
    ?>
        </div>
    </div>
    <?php endif;?> 