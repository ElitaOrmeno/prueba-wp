<?php 
$buttons = get_field('buttons');
if( $buttons ): ?>
    <div class="hero-image container-fluid">
        <div class="row hero-text pl-5">
            <div class="col-md-6">
                <div class="intro">
                    <p>Now</br>
                    It's easy for you</br>
                    to track <span style="color: #ac9bd2">ANYTHING !<span></p>
                </div>

                <div><?php the_content() ?></div>

                <a class="btn btn-intro px-4" href="<?php echo esc_url( $buttons['button']['url'] ); ?>"><?php echo $buttons['button']['title'] ; ?></a>
                <a class="btn btn-link pl-4" href="<?php echo esc_url( $buttons['link']['url'] ); ?>"><?php echo $buttons['link']['title'] ; ?></a>
            </div>
        </div>
    </div>
<?php endif; ?>