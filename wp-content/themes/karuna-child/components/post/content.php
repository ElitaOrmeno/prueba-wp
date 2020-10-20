<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Karuna
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<?php get_template_part( 'components/post/content-first');?>
		<?php get_template_part( 'components/post/content-second');?>
		<?php get_template_part( 'components/post/content-third');?>
		<?php get_template_part( 'components/post/content-fourth');?>

	</div>
	

</article><!-- #post-## -->