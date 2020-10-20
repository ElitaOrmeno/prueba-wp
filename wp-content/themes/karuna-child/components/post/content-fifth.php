<?php 
if( get_field('newsletter_title') && get_field('newsletter_content') ): 
?>
<div class="container-fluid">
    <div id="flex" class="row py-5">
        <div class="col-md-6">
            <h3 class="the-title mb-4"><?php the_field('newsletter_title'); ?></h3>
            <div class="pb-4"><?php the_field('newsletter_content'); ?></div>
            <div role="form" class="wpcf7" id="wpcf7-f7-p120-o1" lang="es-CL" dir="ltr">
                <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                <form action="/pagina-de-entradas/#wpcf7-f7-p120-o1" method="post" class="wpcf7-form init" novalidate="novalidate">
                    <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="7">
                        <input type="hidden" name="_wpcf7_version" value="5.2.2">
                        <input type="hidden" name="_wpcf7_locale" value="es_CL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7-p120-o1">
                        <input type="hidden" name="_wpcf7_container_post" value="120">
                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                    </div>
                    <span class="wpcf7-form-control-wrap email-324">
                        <div class="cf-custom">
                            <input type="email" name="email-324" value="Your email address" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email cf-email" aria-invalid="false">
                            <button type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit cf-submit btn-intro">Submit</button>
                        </div>
                    </span>
                    <span class="ajax-loader"></span>
                    
                    <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

