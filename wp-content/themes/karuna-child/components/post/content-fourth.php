<?php 
$buttons = get_field('button-sm');
if( $buttons ):
    ?>
    <div class="container-fluid">
        <div class="smartphone row">
            <div class="col-md-6 smartphone-padding">
                <h3 class="smartphone-title"><?php the_title(); ?></h3>
                <div class="smartphone-content"><?php the_content(); ?></div>

                <a class="btn btn-google" href="<?php echo esc_url( $buttons['button1']['url'] ); ?>"><?php echo $buttons['button1']['title'] ; ?></a>
                <a class="btn btn-ios" href="<?php echo esc_url( $buttons['button2']['url'] ); ?>"><?php echo $buttons['button2']['title'] ; ?></a>
            </div>
            <div class="col-md-6 smartphone-img"></div>
        </div>
    </div>

    <?php get_template_part( 'components/post/content-fifth');?>
<?php endif; ?>