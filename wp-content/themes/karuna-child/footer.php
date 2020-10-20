<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Karuna
 */

?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_template_part( 'components/footer/footer', 'widgets' ); ?>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>